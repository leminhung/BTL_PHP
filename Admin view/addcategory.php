<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>Thêm loại sản phẩm</title>
    <link
      rel="stylesheet"
      href="https://getbootstrap.com/docs/5.1/dashboard.css"
    />
    <link
      rel="stylesheet"
      href="https://getbootstrap.com/docs/5.1/dashboard.rtl.css"
    />
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.1/examples/dashboard/"
    />

    <!-- include summernote css/js -->
    <link
      href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link
      href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="./dashboard.css" rel="stylesheet" />
  </head>

  <body>
    <!-- HEADER -->
    <!-- <jsp:include page="/WEB-INF/view/quantrivien/layout/header.jsp"></jsp:include> -->
    <!-- HEADER -->
    <header
      class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"
    >
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"
        >Company name</a
      >
      <button
        class="navbar-toggler position-absolute d-md-none collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <input
        class="form-control form-control-dark w-100"
        type="text"
        placeholder="Search"
        aria-label="Search"
      />
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="${base }/logout">Sign out</a>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav
          id="sidebarMenu"
          class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"
        >
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="./Untitled-1.html"
                >
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>

              <li class="nav-item sub">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="./saleOrderList">
                      Danh sách đơn hàng
                    </a>
                  </li>
                </ul>
              </li>

              <li style="margin-bottom: -36px" class="nav-item sub">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="./addproduct"> Thêm sản phẩm</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./productList">
                      Danh sách sản phẩm</a
                    >
                  </li>
                </ul>
              </li>

              <li style="margin-bottom: -36px" class="nav-item sub">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Category
                </a>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="./addcategory"> Thêm danh mục </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./categoryList">
                      Danh sách danh mục</a
                    >
                  </li>
                </ul>
              </li>
              <li style="margin-bottom: -36px" class="nav-item sub">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Customers
                </a>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="./contactList">
                      Danh sách contact
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./userList">
                      Danh sách khách hàng</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul>

            <h6
              class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"
            >
              <span>Saved reports</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <form
            modelAttribute="category"
            method="post"
            action="${base}/admin/addcategory"
            class="form-horizontal"
          >
            <fieldset>
              <sf:hidden path="id" />
              <!-- Form Name -->
              <legend>CATEGORY</legend>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="name"
                  >CATEGORY NAME</label
                >
                <div style="width: 93.333333% !important" class="col-md-4">
                  <input
                    path="name"
                    id="name"
                    name="name"
                    placeholder="CATEGORY NAME"
                    class="form-control input-md"
                    type="text"
                  />
                </div>
              </div>

              <!-- Textarea -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="description"
                  >CATEGORY DESCRIPTION</label
                >
                <div
                  style="width: 93.333333% !important"
                  class="col-md-4 text-des"
                >
                  <textarea
                    path="description"
                    class="form-control"
                    id="summernote"
                    name="description"
                  >
                  </textarea>
                </div>
              </div>

              <script>
                $(document).ready(function () {
                  $("#summernote").summernote();
                });
              </script>

              <!-- Button -->
              <div class="form-group">
                <div class="col-md-4">
                  <button
                    id="singlebutton"
                    name="singlebutton"
                    class="btn btn-primary"
                    type="submit"
                  >
                    Thêm loại sản phẩm
                  </button>
                </div>
              </div>
            </fieldset>
          </form>
        </main>
      </div>
    </div>

    <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
      integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
      integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
      crossorigin="anonymous"
    ></script>
    <script src="./dashboard.js"></script>
    <script src="./dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css"
      rel="stylesheet"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
  </body>
</html>
