<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question</title>
    <link rel="stylesheet" href="{{ asset('css/question.css') }}">
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</head>
<body>
    <div class="container">
        <section class="nav-bar">
            <div class="nav-bar-left">
                <div class="nav-logo">
                    <img src="{{ asset('img/logo-educatio.png') }}" alt="">
                </div>
            </div>

            <div class="nav-bar-right">
                <!-- navigation link -->
                <div class="nav-link">
                    <a class="active" href="#">Pengaturan</a>
                    <a class="inactive" href="{{ route('listAdmin') }}">Data Admin</a>
                    <a class="inactive" href="{{ route('listUser') }}">Data Siswa</a>
                    <div class="nav-profile">
                        <img src="{{ asset('img/profile-icon.png') }}" alt="">
                        <div class="dropdown" style="float:right;">
                            <button class="dropbtn"><span class="iconify" data-inline="false" data-icon="ls:dropdown" style="color: #ff7a00; font-size: 20px;"></span></button>
                            <div class="dropdown-content">
                              <a href="{{ route('profileAdmin') }}">Profile</a>
                              <a href="{{ route('logoutAdmin') }}">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="drp">
                    <div class="dropdown" style="float:right;">
                        <button class="dropbtn"><span class="iconify" data-icon="bi:list" data-inline="false"  style="color: #ff7a00; font-size: 30px;"></span></button>
                        <div class="dropdown-content">
                            <a class="active" href="{{ route('question') }}">Pengaturan</a>
                            <a class="inactive" href="{{ route('listAdmin') }}">Data Admin</a>
                            <a class="inactive" href="{{ route('listUser') }}">Data Siswa</a>
                            <a href="{{ route('profileAdmin') }}">Profile</a>
                            <a href="{{ route('logoutAdmin') }}">Logout</a>
                        </div>
                    </div>
                </div>
                <!-- end navigation link -->
            </div>
        </section>

        <section class="content">
            <div class="content-title">
                <p>Pengaturan</p>
            </div>

            <div class="content-menu">
                <a class="active" href="{{ route('question') }}">Question</a>
                <a class="inactive" href="{{ route('tryout') }}">Tryout</a>
                <a class="inactive" href="#">Scoring</a>
                <a class="inactive" href="#">Settings</a>
            </div>

            <div class="content-menu-drop">
                <div class="dropdown" style="float:right;">
                    <button class="dropbtn"><span class="iconify" data-icon="bi:list" data-inline="false"  style="color: #ff7a00; font-size: 30px;"></span></button>
                    <div class="dropdown-content">
                        <a class="active" href="{{ route('question') }}">Question</a>
                        <a class="inactive" href="{{ route('tryout') }}">Tryout</a>
                        <a class="inactive" href="#">Scoring</a>
                        <a class="inactive" href="#">Settings</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="register-form">
            <form>
                <div class="form-row1">
                    <div>
                        <select class="tryout-category-option" required>
                            <option value="0">Tryout Category</option>
                            <option value="1">Tryout 1</option>
                            <option value="2">Tryout 2</option>
                            <option value="3">Tryout 3</option>
                          </select>
                    </div>
                    <div>
                        <select class="difficulty-option" required>
                            <option value="0">Difficulty</option>
                            <option value="1">C1</option>
                            <option value="2">C2</option>
                            <option value="3">C3</option>
                            <option value="4">C4</option>
                            <option value="5">C5</option>
                            <option value="6">C6</option>
                        </select>
                    </div>
                </div>

                <div class="form-row2">
                    <div>
                        <textarea name="" class="question-area" id="question-area" cols="100" rows="10" placeholder="Type your question here!" required></textarea>
                        <div class="upload-image">
                            <input type="file" name="question_image" id="uploadImage" accept="image/*">
                        </div>
                    </div>
                </div>

                <div class="form-row3">
                    <div>
                        <input type="text" id="answer1" placeholder="Type your answer here!" required><br>
                        <div class="answer-set">
                            <div class="upload-image">
                                <input type="file" name="question_image" id="uploadImage" accept="image/*">
                            </div>
                            <label for="checkBox">Correct Answer</label>
                            <div class="correct-check">
                                <input type="radio" name="questionanswer-stats" id="checkBox" value="correct">
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="text" id="answer2" placeholder="Type your answer here!" required><br>
                        <div class="answer-set">
                            <div class="upload-image">
                                <input type="file" name="question_image" id="uploadImage" accept="image/*">
                            </div>
                            <label for="checkBox">Correct Answer</label>
                            <div class="correct-check">
                                <input type="radio" name="questionanswer-stats" id="checkBox" value="correct">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-row4">
                    <div>
                        <input type="text" id="answer3" placeholder="Type your answer here!" required><br>
                        <div class="answer-set">
                            <div class="upload-image">
                                <input type="file" name="question_image" id="uploadImage" accept="image/*">
                            </div>
                            <label for="checkBox">Correct Answer</label>
                            <div class="correct-check">
                                <input type="radio" name="questionanswer-stats" id="checkBox" value="correct">
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="text" id="answer4" placeholder="Type your answer here!" required><br>
                        <div class="answer-set">
                            <div class="upload-image">
                                <input type="file" name="question_image" id="uploadImage" accept="image/*">
                            </div>
                            <label for="checkBox">Correct Answer</label>
                            <div class="correct-check">
                                <input type="radio" name="questionanswer-stats" id="checkBox" value="correct">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-row5">
                    <div>
                        <input type="text" id="answer5" placeholder="Type your answer here!" required><br>
                        <div class="answer-set">
                            <div class="upload-image">
                                <input type="file" name="question_image" id="uploadImage" accept="image/*">
                            </div>
                            <label for="checkBox">Correct Answer</label>
                            <div class="correct-check">
                                <input type="radio" name="questionanswer-stats" id="checkBox" value="correct">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="action">
                    <div class="btn-submit">
                        <button class="btn_submit" type="submit">Add Question</button>
                    </div>
                    <div class="btn-reset">
                        <button class="btn_reset" type="reset">Reset</button>
                    </div>
                </div>
                
            </form>

            
        </section>
    </div>
</body>
</html>