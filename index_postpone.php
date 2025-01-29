<!DOCTYPE html>
<html lang='ar'>
    <head>
        <!-- meta -->
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta name='description' content='this system is private property'>
        <!-- link icon -->
        <link rel='icon' href='img/logo_icon.png'>
        <!-- link css -->
        <link rel='stylesheet' href='css/style.css'>
        <link rel='stylesheet' href='css/staff_data.css'>
        <link rel='stylesheet' href='css/menu.css'>
        <link rel='stylesheet' href='css/all.min.css'>
        <link rel='stylesheet' href='css/bootstrap.css'>
        <title>Theqa Pay</title>
    </head>
    <body>
        <!-- header -->
        <div class='header'>
            <div>
                <a href='index.html' class='navbar-brand'>
                    <img src='img/logo.png' alt='' draggable='false'>
                </a>
                <div id='nav'>
                    
                    <div class='collapse navbar-collapse mx-2'>
                        <div>
                            <div class='dropdowns'>
                                <div class='dropdown mx-2 my-2'>
                                    <button class='btn dropdown-toggle' type='button' data-toggle='dropdown' aria-expanded='false'>
                                        <span id='User_Name_Show'></span>
                                    </button>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item' href='change-password.html'>
                                            <i class='fa fa-unlock text-dark'></i>
                                            <p class='mx-2'>تغيير كلمة المرور</p>
                                        </a>
                                        <div class='dropdown-divider m-0'></div>
                                        <a class='dropdown-item' href='../index.html'>
                                            <i class='fa-solid fa-power-off text-dark'></i>
                                            <p class='mx-2'> تسجيل الخروج </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='navbar-toggler d-none' type='button'>
                        <span class='navbar-toggler-icon'>
                            <i class='fa fa-plus'></i>
                        </span>
                    </div>
                    <div class='IconMenu'>
                        <span></span>
                        <span class='Active'></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- content -->
        <div class='content'>
            <!-- menu -->
            <div class='menu'>
                <ul>        
                    <li class='li'>
                        <a href='#' class=''>
                            <i class='fa-solid fa-parachute-box'></i>
                            <span>طلبات التوظيف</span>
                            <i class='fa fa-angle-left'></i>
                        </a>
                        <ul class='mm-collapse'>
                            <li>
                                <a href='index.php'>
                                    <i class='fas fa-file-invoice'></i>
                                    <span> الطلبات </span>
                                </a>
                            </li>
                            <li>
                                <a href='del/index.php'>
                                    <i class="fa-solid fa-trash"></i>
                                    <span> المحذوفات </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class='li'>
                        <a href='#' class=''>
                            <i class='fa-solid fa-users-line'></i>
                            <span>قائمة المعينيين</span>
                            <i class='fa fa-angle-left'></i>
                        </a>
                        <ul class='mm-collapse'>
                            <li>
                                <a href='index_appointed.php' class=''>
                                    <i class='fa-solid fa-id-card-clip'></i>
                                    <span> المعينيين  </span>
                                </a>
                            </li>
                            <li>
                                <a href='del/index_appointed.php'>
                                    <i class="fa-solid fa-trash"></i>
                                    <span> المحذوفات </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class='li'>
                        <a href='#' class='active'>
                            <i class="fa-solid fa-signs-post"></i>
                            <span>قائمة المؤجلين</span>
                            <i class='fa fa-angle-left'></i>
                        </a>
                        <ul class='mm-collapse'>
                            <li>
                                <a href='index_postpone.php'>
                                    <i class='fa-solid fa-info'></i>
                                    <span> المؤجلين  </span>
                                </a>
                            </li>
                            <li>
                                <a href='del/index_postpone.php'>
                                    <i class="fa-solid fa-trash"></i>
                                    <span> المحذوفات  </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class='settings'>
                        <a href='settings.php'>
                            <i class='fa fa-cog'></i>
                            <span>الاعدادات</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- show-board -->
            <div class='show-board'>
                <div class='title-info'>
                    <p>بيانات الموظفين</p>    
                    <div class='btns-export-group'>
                        <button class='btn export mx-2' onclick="ExportToXLSX('xls')">التصدير الي إكسيل</button>
                        <button class='btn export mx-2' onclick='ExportToPDF()'>التصدير الي pdf</butto>
                    </div>
                    
                </div>
                <div class='data-info'>
                    <table class='table table-bordered table-striped' id='table'>
                        <thead>
                            <tr class="no">
                                <th>الكود</th>
                                <th>اسم الموظف</th>
                                <th>موعد التسجيل</th>
                                <th>الاجراءات </th>
                            </tr>
                        </thead>
                        <tbody id='body-data'>
                            <?php
                                include('inc/config.php');
                                $result = mysqli_query($conection,"SELECT * FROM employee_postpone");
                                $i = 1;
                                while($row = mysqli_fetch_array($result)){
                                    echo"
                                        <tr>
                                            <td>$i</td>
                                            <td>$row[user_name]</td>
                                            <td>$row[dateOfdate]</td>
                                            <td>
                                                <div class='dropdown'>
                                                    <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown' aria-expanded='false' style='padding: 0 !important; height: 35px; width: 55px;'>
                                                        <svg class='svg-inline--fa fa-gear p-1' aria-hidden='true' focusable='false' data-prefix='fas' data-icon='gear' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' data-fa-i2svg=''><path fill='currentColor' d='M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z'></path></svg><!-- <i class='fa fa-cog p-1'></i> Font Awesome fontawesome.com -->
                                                    </button>
                                                    <div class='dropdown-menu' style='position: absolute; transform: translate3d(2px, 35px, 0px); top: 0px; left: 0px; will-change: transform;' x-placement='bottom-start'>
                                                        <form action='show/show_postpone.php' type='submit' method='post'>
                                                            <input type='hidden' id='id' name='id' value='$row[user_id]'>
                                                            <button class='btn btn-primary w-100 m-1'>
                                                                عــرض
                                                            </button>
                                                        </form>
                                                        <form action='php/appointed.php' type='submit' method='post'>
                                                            <input type='hidden' id='id' name='id' value='$row[user_id]'>
                                                            <input type='hidden' id='typedatabase' name='typedatabase' value='employee_postpone'>
                                                            <button class='btn btn-success w-100 m-1'>
                                                                تعيين
                                                            </button>
                                                        </form>
                                                        <form action='php/delete.php' method='post'>
                                                            <input type='hidden' id='id' name='id' value='$row[user_id]'>
                                                            <input type='hidden' id='typedatabase' name='typedatabase' value='employee_postpone'>
                                                            <input type='hidden' id='TOtypedatabase' name='TOtypedatabase' value='delete_postpone'>
                                                            <button class='btn btn-danger w-100 m-1' type='submit'>
                                                                حذف
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>                 
                                        </tr>
                                    ";
                                    $i += 1;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- js files -->
        <script src='js/jquery-3.7.0.min.js'></script>
        <script src='js/popper.min.js'></script>
        <script src='js/bootstrap.js'></script>
        <script src='js/all.min.js'></script>
        <script src='js/menu.js'></script>
        <script src='js/staff_data.js'></script>
        <script src='js/unpkg.com_xlsx@0.15.1_dist_xlsx.full.min.js'></script>
        <script src='js/pdf.bundle.min.js'></script>
        <script src='js/pdf.bundle.js'></script>
        <script src='../js/export.js'></script>
    </body>
</html>