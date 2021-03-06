<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/css/suggestions.min.css" rel="stylesheet" />
</head>
<body>
<div class="conent">
    <div class="row d-flex justify-content-center align-items-center">
        <h3 class="text-center mt-2">Синицын Алексей</h3>
        <div class="col-6">
            <form class="mt-5" action="save.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Фио</label>
                    <input type="text" name="name" id="username" required class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Адрес проживания</label>
                    <input type="text" name="address" id="address" required class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Подтвердить</button>
            </form>
        </div>
    </div>

    <div class="modal fade" id="fileSentModal" tabindex="-1" aria-labelledby="fileSentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fileSentModalLabel">Все прошло успешно</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Можно проверять корень проекта :)
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/js/jquery.suggestions.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script src="script.js"></script>
</body>
</html>