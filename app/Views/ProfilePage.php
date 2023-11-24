<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php base_url()?>/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Profile</title>
</head>
<body>
    <div class="container-fluid">
        <div class="logo card p-4 m-2 shadow-sm">
            <div class="row">
                <div class="col-2">
                    <img class="logo img-responsive img-thumbnail rounded-circle" src="<?php base_url()?>/assets/img/avatar_blank.jpg" alt="Logo">
                </div>
                <div class="col-4">
                    <div class="card-body">
                        <div class="card-title text text-uppercase fs-2 fw-bold">Nguyễn Văn ABC</div>
                        <div class="card-subtitle mb-2 text-muted fs-3">ID: <span class="mssv">21520000</span></div>
                    </div>
                </div>
                <div class="col-4 border-start">
                    <div class="card-body">
                        <div class="card-title mb-1 fs-3 fw-bold">Giới tính: </div>
                        <p class="sex fs-4">Nam</p>
                        <div class="card-title mb-1 fs-3 fw-bold">Email: </div>
                        <p class="email fs-4">21520000@gm.edu.vn</p>
                    </div>
                </div>
                <div class="col-2 border-start">
                    <div class="card-body">
                        <button class="btn btn-outline-dark">
                            <i class="fas fa-user-cog"></i>
                            Chỉnh sửa thông tin
                        </button>
                        <div class="my-3"></div>
                        <button class="btn btn-outline-dark">
                            <i class="fas fa-undo-alt"></i>
                            Đặt lại mặc định
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="fs-3 ms-3">
            <div aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </div>
        </div>

        <div class="row ">
            <div class="col-2">
                <div class="card">

                </div>
            </div>
            <div class="col-10">
                <div class="card p-4 mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="card-title fs-3 fw-bold">Các khóa học đã tham gia</div>
                            </div>
                            <div class="col-6">
                                <div class=" d-flex justify-content-end">
                                    <div>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Tất cả</option>
                                            <option value="1">Kết thúc</option>
                                            <option value="2">Đang diễn ra</option>
                                            <option value="3">Sắp diễn ra</option>
                                        </select>
                                    </div>
                                    <div class="mx-2"></div>
                                    <button class="btn btn-outline-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        Mở rộng/Thu gọn
                                    </button>
                                </div>
                               
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-6">
                                <div class="p-3 card shadow-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Lập trình .NET</h3>
                                        <div class="my-3"></div>
                                        <p class="card-text">Trạng thái: <span class="class__item--inprocess">Đang diễn ra</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 card shadow-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Công nghệ Java</h3>
                                        <div class="my-3"></div>
                                        <p class="card-text">Trạng thái: <span class="class__item--inprocess">Đang diễn ra</span></p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row mb-4">
                            <div class="col-6">
                                <div class="p-3 card shadow-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Lập trình .NET</h3>
                                        <div class="my-3"></div>
                                        <p class="card-text">Trạng thái: <span class="class__item--inprocess">Đang diễn ra</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 card shadow-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Công nghệ Java</h3>
                                        <div class="my-3"></div>
                                        <p class="card-text">Trạng thái: <span class="class__item--inprocess">Đang diễn ra</span></p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row mb-4">
                            <div class="col-6">
                                <div class="p-3 card shadow-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Lập trình .NET</h3>
                                        <div class="my-3"></div>
                                        <p class="card-text">Trạng thái: <span class="class__item--inprocess">Đang diễn ra</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 card shadow-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Công nghệ Java</h3>
                                        <div class="my-3"></div>
                                        <p class="card-text">Trạng thái: <span class="class__item--inprocess">Đang diễn ra</span></p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="collapse" id="collapseExample">
                            <div class="row mb-4">
                                <div class="col-6">
                                    <div class="p-3 card shadow-sm">
                                        <div class="card-body">
                                            <h3 class="card-title">Lập trình .NET</h3>
                                            <div class="my-3"></div>
                                            <p class="card-text">Trạng thái: <span class="class__item--inprocess">Đang diễn ra</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-3 card shadow-sm">
                                        <div class="card-body">
                                            <h3 class="card-title">Công nghệ Java</h3>
                                            <div class="my-3"></div>
                                            <p class="card-text">Trạng thái: <span class="class__item--inprocess">Đang diễn ra</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-6">
                                    <div class="p-3 card shadow-sm">
                                        <div class="card-body">
                                            <h3 class="card-title">Lập trình .NET</h3>
                                            <div class="my-3"></div>
                                            <p class="card-text">Trạng thái: <span class="class__item--inprocess">Đang diễn ra</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-3 card shadow-sm">
                                        <div class="card-body">
                                            <h3 class="card-title">Công nghệ Java</h3>
                                            <div class="my-3"></div>
                                            <p class="card-text">Trạng thái: <span class="class__item--inprocess">Đang diễn ra</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-6">
                                    <div class="p-3 card shadow-sm">
                                        <div class="card-body">
                                            <h3 class="card-title">Lập trình .NET</h3>
                                            <div class="my-3"></div>
                                            <p class="card-text">Trạng thái: <span class="class__item--inprocess">Đang diễn ra</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-3 card shadow-sm">
                                        <div class="card-body">
                                            <h3 class="card-title">Công nghệ Java</h3>
                                            <div class="my-3"></div>
                                            <p class="card-text">Trạng thái: <span class="class__item--inprocess">Đang diễn ra</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>