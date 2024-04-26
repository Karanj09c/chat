<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('customstyle.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ mix('js/app.js') }}"></script>

</head>

<body>
    <section class="message-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="chat-area">
                        <!-- chatlist -->
                        <div class="chatlist">
                            <div class="modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="chat-header">
                                        <div class="msg-search">
                                            <input type="text" class="form-control" id="inlineFormInputGroup"
                                                placeholder="Search" aria-label="search">
                                            <a class="add" href="#"><img class="img-fluid"
                                                    src="https://mehedihtml.com/chatbox/assets/img/add.svg"
                                                    alt="add"></a>
                                        </div>

                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="Open-tab" data-bs-toggle="tab"
                                                    data-bs-target="#Open" type="button" role="tab"
                                                    aria-controls="Open" aria-selected="true">Open</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="Closed-tab" data-bs-toggle="tab"
                                                    data-bs-target="#Closed" type="button" role="tab"
                                                    aria-controls="Closed" aria-selected="false">Closed</button>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="modal-body">
                                        <!-- chat-list -->
                                        <div class="chat-lists">
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active activeUsers" id="Open"
                                                    role="tabpanel" aria-labelledby="Open-tab">
                                                    <!-- chat-list -->
                                                    <div class="chat-list">
                                                        <a href="#" class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img class="img-fluid"
                                                                    src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                                                    alt="user img">
                                                                <span class="active"></span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h3>Mehedi Hasan</h3>
                                                                <p>front end developer</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- chat-list -->
                                                </div>
                                                <div class="tab-pane fade" id="Closed" role="tabpanel"
                                                    aria-labelledby="Closed-tab">

                                                    <!-- chat-list -->
                                                    <div class="chat-list">
                                                        <a href="#" class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img class="img-fluid"
                                                                    src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                                                    alt="user img">
                                                                <span class="active"></span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h3>Mehedi Hasan</h3>
                                                                <p>front end developer</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- chat-list -->
                                                </div>
                                            </div>

                                        </div>
                                        <!-- chat-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- chatlist -->



                        <!-- chatbox -->
                        <div class="chatbox">
                            <div class="modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="msg-head">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="d-flex align-items-center">
                                                    <span class="chat-icon"><img class="img-fluid"
                                                            src="https://mehedihtml.com/chatbox/assets/img/arroleftt.svg"
                                                            alt="image title"></span>
                                                    <div class="flex-shrink-0">
                                                        <img class="img-fluid"
                                                            src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                                            alt="user img">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h3>Mehedi Hasan</h3>
                                                        <p>front end developer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <ul class="moreoption">
                                                    <li class="navbar nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#"
                                                            role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false"><i class="fa fa-ellipsis-v"
                                                                aria-hidden="true"></i></a>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal-body">
                                        <div class="msg-body">
                                            <ul>
                                                <li class="sender">
                                                    <p> Hey, Are you there? </p>
                                                    <span class="time">10:06 am</span>
                                                </li>

                                                <li class="repaly">
                                                    <p>yes!</p>
                                                    <span class="time">10:20 am</span>
                                                </li>

                                                <li>
                                                    <div class="divider">
                                                        <h6>Today</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="send-box">
                                        <form action="">
                                            <input type="text" class="form-control" aria-label="message…"
                                                placeholder="Write message…">

                                            <button type="button"><i class="fa fa-paper-plane"
                                                    aria-hidden="true"></i>
                                                Send</button>
                                        </form>

                                        <div class="send-btns">
                                            <div class="attach">
                                                <div class="button-wrapper">
                                                    <span class="label">
                                                        <img class="img-fluid"
                                                            src="https://mehedihtml.com/chatbox/assets/img/upload.svg"
                                                            alt="image title"> attached file
                                                    </span><input type="file" name="upload" id="upload"
                                                        class="upload-box" placeholder="Upload File"
                                                        aria-label="Upload File">
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
        </div>
        </div>
    </section>
    <script>
        jQuery(document).ready(function() {

            $(".chat-list a").click(function() {
                $(".chatbox").addClass('showbox');
                return false;
            });

            $(".chat-icon").click(function() {
                $(".chatbox").removeClass('showbox');
            });


        });
    </script>
</body>

</html>
