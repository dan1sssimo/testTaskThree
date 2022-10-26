<html>
<head>
    <title><?= $MainTitle ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/styles/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: red">main page</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/users/">Task 3 SoftSprint</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <h1 class="mt-5 pageTitle"><?= $PageTitle ?></h1>
    <?php if (!empty($MessageText)): ?>
        <div class="alert alert-<?= $MessageClass ?>" role="alert">
            <?= $MessageText ?>
        </div>
    <?php endif; ?>
    <?= $PageContent ?>
</div>
<script src="/scripts/formScripts.js"></script>
<script src="/scripts/ajaxScripts.js"></script>
</body>
</html>