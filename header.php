<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg bg-body-tertiary d-flex" style='justify-content:center;align-items:center;'>
  <div class="container-fluid">
  <a class="navbar-brand" href="./">
      <img src="imgs/logo.jpg" alt="Bootstrap" width="100" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <center>
        <form class="d-flex" role="search" style='margin-left:350px;'>
          <input class="form-control me-2 flex-auto" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </center>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style='margin-left:220px;'>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img src="imgs/logo.jpg" style='width:35px;border-radius:50%;' alt="">
          </a>
        </li>
      </ul>

    </div>
  </div>
</nav>

<style>
  .flex-auto{
    flex: auto;
  }

  button{
    border: none;
    outline: 0;
  }

  *{
    margin: 0;
    padding: 0;
}
</style>