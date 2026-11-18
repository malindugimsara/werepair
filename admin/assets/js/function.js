var function_start_status = false;
var event_id;
var main_url = window.location.href.includes('/admin')
  ? window.location.href.split('/admin')[0] + '/admin/'
  : 'https://werepair.lk/admin/';

function showToastMessage(msg, isSuccess) {
  try {
    if (typeof Toastify === 'function') {
      Toastify({
        newWindow: true,
        text: msg,
        gravity: "top",
        position: "center",
        className: isSuccess ? "bg-success" : "bg-danger",
        duration: 2500,
        stopOnFocus: true,
        style: {
          background: isSuccess
            ? "linear-gradient(to right, #0AB39C, #405189)"
            : "linear-gradient(to right, #f06548, #d9534f)"
        }
      }).showToast();
      return;
    }
  } catch (e) {}
  alert(msg);
}

function sign_in() {
  if (function_start_status == false) {
    function_start_status = true;

    var btnDis = document.getElementById("sign-in-btn-dis-status");
    var btnLoading = document.getElementById("sign-in-btn-loading-button");
    if (btnDis) btnDis.classList.add("d-none");
    if (btnLoading) btnLoading.classList.remove("d-none");

    var username = document.getElementById("username");
    var password = document.getElementById("password-input");
    var remember_me = document.getElementById("auth-remember-check");

    if (!username || username.value.trim() == "") {
      if (username) username.style.border = "1px solid red";
    }
    if (!password || password.value == "") {
      if (password) password.style.border = "1px solid red";
    }

    if (username && username.value.trim() != "" && password && password.value != "") {
      var form = new FormData();
      form.append("username", username.value.trim());
      form.append("password", password.value);
      form.append("remember_me", remember_me ? remember_me.checked : false);

      var r = new XMLHttpRequest();
      r.onreadystatechange = function () {
        if (r.readyState == 4) {
          var response_text = (r.responseText || "").trim();

          if (response_text == "Success") {
            signin_set_cookie();
          } else {
            if (response_text.includes("username")) {
              if (username) username.style.border = "1px solid red";
            }
            if (response_text.includes("password") || response_text.includes("invalid")) {
              if (password) password.style.border = "1px solid red";
            }
            showToastMessage(response_text || "Please check your login details and try again!", false);

            function_start_status = false;
            if (btnLoading) btnLoading.classList.add("d-none");
            if (btnDis) btnDis.classList.remove("d-none");
          }
        }
      };

      r.open("POST", main_url + "process/sign-in-process.php", true);
      r.send(form);
    } else {
      function_start_status = false;
      if (btnLoading) btnLoading.classList.add("d-none");
      if (btnDis) btnDis.classList.remove("d-none");
    }
  }
}

function sign_in_error_clean() {
  var username = document.getElementById("username");
  var password = document.getElementById("password-input");

  if (document.activeElement == username) {
    username.style.border = "1px solid var(--vz-input-border)";
  }
  if (document.activeElement == password) {
    password.style.border = "1px solid var(--vz-input-border)";
  }
}

function signin_set_cookie() {
  var remember_me = document.getElementById("auth-remember-check");
  var password = document.getElementById("password-input");

  var form = new FormData();
  form.append("remember_me", remember_me ? remember_me.checked : false);
  form.append("password", password ? password.value : "");

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      showToastMessage("Login successfully !", true);
      setTimeout(function () {
        function_start_status = false;
        window.location = "index.php";
      }, 800);
    }
  };

  r.open("POST", "set-cookie.php", true);
  r.send(form);
}

function logout() {
  if (function_start_status == false) {
    function_start_status = true;

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        function_start_status = false;
        var response_text = r.responseText;
        if (response_text == "Success") {
          window.location.reload();
        }
      }
    };

    r.open("POST", "logout.php", true);
    r.send();
  }
}

var article_id;

function project_view(id) {
  if (function_start_status == false) {
    function_start_status = true;

    article_id = id;
    var form = new FormData();
    form.append("Check-request", "project");
    form.append("id", id);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        var response_text = r.responseText;
        document.getElementById("article-content").innerHTML = response_text;
        document.getElementById("article-content-load").classList.add("d-none");
        document.getElementById("article-content").classList.remove("d-none");
        function_start_status = false;
      }
    };

    r.open("POST", main_url + "process/all-content.php", true);
    r.send(form);
  }
}

function project_image_delete(id) {
  Swal.fire({
    title: "Are you sure?",
    text: "You won't delete this project image!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      project_img_de(id);
    }
  });
}

function project_img_de(id) {
  if (function_start_status == false) {
    function_start_status = true;
    document.getElementById("article-img-delete").classList.add("d-none");
    document
      .getElementById("article-img-delete-load_btn")
      .classList.remove("d-none");

    var form = new FormData();
    form.append("id", id);
    form.append("Check-request", "project-img");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        var t = r.responseText;

        (m = document.querySelectorAll("[data-toast-article-add]")),
          Array.from(m).forEach(function (a) {
            var e = {},
              t = a.attributes;

            "Project image successfully deleted!" &&
              (e.text = "Project image successfully deleted!"),
              t["data-toast-gravity"] &&
                (e.gravity = t["data-toast-gravity"].value.toString()),
              "center" && (e.position = "center"),
              "success" && (e.className = "success"),
              "2500" && (e.duration = "2500"),
              t["data-toast-style"] &&
                (e.style = t["data-toast-style"].value.toString()),
              t["data-toast-offset"] && (e.offset = t["data-toast-offset"]),
              Toastify({
                newWindow: !0,
                text: e.text,
                gravity: e.gravity,
                position: e.position,
                className: "bg-" + e.className,
                stopOnFocus: !0,
                offset: {
                  x: e.offset ? 50 : 0,
                  y: e.offset ? 10 : 0,
                },
                duration: e.duration,
                close: "close" == e.close,
                style:
                  "style" == e.style
                    ? {
                        background:
                          "linear-gradient(to right, #0AB39C, #405189)",
                      }
                    : "",
              }).showToast();
          });

        document.getElementById("article-content").innerHTML = "";
        document
          .getElementById("article-content-load")
          .classList.remove("d-none");
        document.getElementById("article-content").classList.add("d-none");
        function_start_status = false;

        project_view(article_id);
      }
    };
    r.open("POST", main_url + "process/all-delete.php", true);
    r.send(form);
  }
}

function project_edit_view(id) {
  if (function_start_status == false) {
    function_start_status = true;

    var form = new FormData();
    form.append("Check-request", "project-edit");
    form.append("id", id);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        var response_text = r.responseText;
        document.getElementById("article-edit-content").innerHTML =
          response_text;
        document
          .getElementById("article-edit-content-load")
          .classList.add("d-none");
        document
          .getElementById("article-edit-content")
          .classList.remove("d-none");
        function_start_status = false;

        var quill = new Quill(".snow-editor-u", {
          modules: {
            toolbar: toolbarOptions,
          },
          theme: "snow",
        });
      }
    };

    r.open("POST", main_url + "process/all-content.php", true);
    r.send(form);
  }
}


function update_project(id) {
  if (function_start_status == false) {
    function_start_status = true;
    document.getElementById("new_article_btn-u").classList.add("d-none");
    document
      .getElementById("new_article_load_btn-u")
      .classList.remove("d-none");

    var title = document.getElementById("article-title-u");
    var des = document.getElementById("article-des-u");
    var images = document.getElementById("article-files-u");
   
    var meta_title = document.getElementById("meta-title-u");
    var meta_des = document.getElementById("meta-des-u");
    var meta_kw = document.getElementById("meta-keywords-u");

    var file_size_total = 0;

    // Calculate total image sizes
    for (
      var files_size_t = 0;
      files_size_t < images.files.length;
      files_size_t++
    ) {
      file_size_total = file_size_total + images.files[files_size_t].size;
    }

    if (file_size_total > 10485760) {
      // 10MB in bytes
      showToast("The total size of all images is limited to 10MB!", "danger");
      function_start_status = false;
      document.getElementById("new_article_btn-u").classList.remove("d-none");
      document.getElementById("new_article_load_btn-u").classList.add("d-none");
      return;
    }

    var form = new FormData();
    form.append("Check-request", "project-add");
    form.append("id", id);
    form.append("title", title.value);

    // Add images
    for (var i2 = 0; i2 < images.files.length; i2++) {
      form.append("files[]", images.files[i2]);
    }


    form.append("des", des.firstChild.innerHTML);
    form.append("meta_title", meta_title.value);
    form.append("meta_des", meta_des.value);
    form.append("meta_kw", meta_kw.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        var response_text = r.responseText;

        if (response_text == "Success") {
          showToast("The project was updated successfully!", "success");
          setTimeout(function () {
            window.location.reload();
          }, 1000);
        } else {
          showToast(response_text, "danger");
          function_start_status = false;
          document
            .getElementById("new_article_btn-u")
            .classList.remove("d-none");
          document
            .getElementById("new_article_load_btn-u")
            .classList.add("d-none");
        }
      }
    };

    r.open("POST", main_url + "process/edit-details.php", true);
    r.send(form);
  }
}

// Helper function for showing toast messages
function showToast(message, type) {
  Toastify({
    newWindow: true,
    text: message,
    gravity: "center",
    position: "center",
    className: "bg-" + type,
    stopOnFocus: true,
    duration: 2500,
  }).showToast();
}

function project_delete(id) {
  Swal.fire({
    title: "Are you sure?",
    text: "You won't delete this project!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      project_de(id);
    }
  });
}

function project_de(id) {
  var form = new FormData();
  form.append("id", id);
  form.append("Check-request", "project");

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      (m = document.querySelectorAll("[data-toast-article-add]")),
        Array.from(m).forEach(function (a) {
          var e = {},
            t = a.attributes;

          "Project successfully deleted!" &&
            (e.text = "Project successfully deleted!"),
            t["data-toast-gravity"] &&
              (e.gravity = t["data-toast-gravity"].value.toString()),
            "center" && (e.position = "center"),
            "success" && (e.className = "success"),
            "2500" && (e.duration = "2500"),
            t["data-toast-style"] &&
              (e.style = t["data-toast-style"].value.toString()),
            t["data-toast-offset"] && (e.offset = t["data-toast-offset"]),
            Toastify({
              newWindow: !0,
              text: e.text,
              gravity: e.gravity,
              position: e.position,
              className: "bg-" + e.className,
              stopOnFocus: !0,
              offset: {
                x: e.offset ? 50 : 0,
                y: e.offset ? 10 : 0,
              },
              duration: e.duration,
              close: "close" == e.close,
              style:
                "style" == e.style
                  ? {
                      background: "linear-gradient(to right, #0AB39C, #405189)",
                    }
                  : "",
            }).showToast();
        });
      setTimeout(function () {
        window.location.reload();
      }, 1000);
    }
  };
  r.open("POST", main_url + "process/all-delete.php", true);
  r.send(form);
}

function save_project() {
  if (function_start_status == false) {
    function_start_status = true;
    document.getElementById("new_article_btn").classList.add("d-none");
    document.getElementById("new_article_load_btn").classList.remove("d-none");

    var title = document.getElementById("article-title");
    var des = document.getElementById("article-des");
    var images = document.getElementById("article-files");
  
    var meta_title = document.getElementById("meta-title");
    var meta_des = document.getElementById("meta-des");
    var meta_kw = document.getElementById("meta-keywords");

    var file_size_total = 0;
    var video_size = 0;

    // Calculate total image sizes
    for (
      var files_size_t = 0;
      files_size_t < images.files.length;
      files_size_t++
    ) {
      file_size_total = file_size_total + images.files[files_size_t].size;
    }

    if (file_size_total > 10485760) {
      // 10MB in bytes
      showToast("The total size of all images is limited to 10MB!", "danger");
      function_start_status = false;
      document.getElementById("new_article_btn").classList.remove("d-none");
      document.getElementById("new_article_load_btn").classList.add("d-none");
      return;
    }

    var form = new FormData();
    form.append("Check-request", "project-add");

    form.append("title", title.value);

    // Add images
    for (var i2 = 0; i2 < images.files.length; i2++) {
      form.append("files[]", images.files[i2]);
    }

    form.append("des", des.firstChild.innerHTML);
    form.append("meta_title", meta_title.value);
    form.append("meta_des", meta_des.value);
    form.append("meta_kw", meta_kw.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        var response_text = r.responseText;

        if (response_text == "Success") {
          showToast("The project was added successfully!", "success");
          setTimeout(function () {
            window.location.reload();
          }, 1000);
        } else {
          showToast(response_text, "danger");
          function_start_status = false;
          document.getElementById("new_article_btn").classList.remove("d-none");
          document
            .getElementById("new_article_load_btn")
            .classList.add("d-none");
        }
      }
    };

    r.open("POST", main_url + "process/save-details.php", true);
    r.send(form);
  }
}

// Helper function for showing toast messages
function showToast(message, type) {
  Toastify({
    newWindow: true,
    text: message,
    gravity: "center",
    position: "center",
    className: "bg-" + type,
    stopOnFocus: true,
    offset: {
      x: 50,
      y: 10,
    },
    duration: 2500,
    close: false,
    style: {
      background:
        type === "success" ? "linear-gradient(to right, #0AB39C, #405189)" : "",
    },
  }).showToast();
}
