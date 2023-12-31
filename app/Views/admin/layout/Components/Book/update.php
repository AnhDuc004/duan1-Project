<?php require_once "./app/Views/admin/layout/Components/header.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <title>Danh mục</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <!-- Begin Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand mx-2" href="#">THÊM MỚI SẢN PHẨM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>
    <!-- End Header -->

    <!-- Begin Main -->
    <main class="m-2">
        <form action="<?= URL ?>/Book/update/<?= $data['book']['id'] ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" id="" placeholder="" disabled value="<?= $data['book']['id'] ?? '' ?>">
            </div>
            <div class="form-group">
                <label for="">Danh Mục</label>
                <select class="form-control" id="" name="cateID">
                    <?php foreach ($data['cates'] as $cate) : ?>
                        <?php if ($cate['id'] === $data['book']['cateID']) : ?>
                            <option value="<?= $cate['id'] ?>" selected><?= $cate['cateName'] ?></option>
                        <?php else : ?>
                            <option value="<?= $cate['id'] ?>"><?= $cate['cateName'] ?></option>
                        <?php endif ?>
                    <?php endforeach ?>
                </select>
                <span class="span-err" style="color:red;font-weight:bold;font-style:i"><?= $data['err']['cateID_err'] ?? '' ?></span>
            </div>
            <div class="form-group">
                <label for="">Trạng Thái</label>
                <select class="form-control" id="" name="statusID">
                    <?php foreach ($data['status'] as $status) : ?>
                        <?php if ($status['id'] === $data['book']['statusID']) : ?>
                            <option value="<?= $status['id'] ?>" selected><?= $status['statusName'] ?></option>
                        <?php else : ?>
                            <option value="<?= $status['id'] ?>"><?= $status['statusName'] ?></option>
                        <?php endif ?>
                    <?php endforeach ?>
                </select>
                <span class="span-err" style="color:red;font-weight:bold;font-style:i"><?= $data['err']['statusID_err'] ?? '' ?></span>
            </div>
            <div class="form-group">
                <label for="">Tên Sản Phẩm</label>
                <input type="text" class="form-control" id="" placeholder="" name="bookName" value="<?= $data['book']['bookName'] ?? '' ?>">
                <span class="span-err" style="color:red;font-weight:bold;font-style:i"><?= $data['err']['bookName_err'] ?? '' ?></span>
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control" id="" placeholder="" name="image">
                <div style="margin: 20px 0;"><img src="../../Public/upload/<?= $data['book']['image'] ?>" alt="" style="width: 120px;"></div>
            </div>
            <div class="form-group">
                <label for="">Tác Giả</label>
                <select class="form-control" id="" name="authorID">
                    <?php foreach ($data['authors'] as $author) : ?>
                        <?php if ($author['authorID'] === $data['book']['authorID']) : ?>
                            <option value="<?= $author['authorID'] ?>" selected><?= $author['authorName'] ?></option>
                        <?php else : ?>
                            <option value="<?= $author['authorID'] ?>"><?= $author['authorName'] ?></option>
                        <?php endif ?>
                    <?php endforeach ?>
                </select>
                <span class="span-err" style="color:red;font-weight:bold;font-style:i"><?= $data['err']['authorID_err'] ?? '' ?></span>
            </div>
            <div class="form-group">
                <label for="">Số Lượng</label>
                <input type="text" class="form-control" id="" placeholder="" name="quantity" value="<?= $data['book']['quantity'] ?? '' ?>">
                <span class="span-err" style="color:red;font-weight:bold;font-style:i"><?= $data['err']['quantity_err'] ?? '' ?></span>
            </div>
            <div class="form-group">
                <label for="">Giá</label>
                <input type="text" class="form-control" id="" placeholder="" name="price" value="<?= $data['book']['price'] ?? '' ?>">
                <span class="span-err" style="color:red;font-weight:bold;font-style:i"><?= $data['err']['price_err'] ?? '' ?></span>
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $data['book']['description'] ?? '' ?>">
                <span class="span-err" style="color:red;font-weight:bold;font-style:i"><?= $data['err']['description_err'] ?? '' ?></span>
            </div>
            <div class="form-group mx-auto my-2">
                <input type="submit" name="btn-update" value="Cập Nhật" class="btn btn-primary">
                <a href="<?= URL ?>Admin/listBook" class="btn btn-primary">Danh Sách</a>
            </div>
        </form>
    </main>
    <!-- End Main -->

    <!-- Begin Footer -->
    <footer>
    </footer>
    <!-- End Footer -->

</body>

</html>
<?php require_once "./app/Views/admin/layout/Components/footer.php"; ?>
