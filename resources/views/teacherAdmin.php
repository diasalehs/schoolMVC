<?php
/**
 * Created by PhpStorm.
 * User: diasaleh
 * Date: 3/22/16
 * Time: 11:48 PM
 */


echo " <div class=\"page-header\">
              <h1>المعلمين <small></small></h1>
        </div>    
          <div class=\"panel-group\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h4 class=\"panel-title\">
          <a data-toggle=\"collapse\" href=\"#collapse1\" class=\"\">اضافة معلم   <span class=\"glyphicon glyphicon-plus\"></span></a>
        </h4>
      </div>
      <div id=\"collapse1\" class=\"panel-collapse collapse\">
                  <div action=\"\" class=\"form-horizontal\" id=\"form_data\">
                <div class=\"form-group\">
                    <div class=\"col-md-8\"><input id=\"stn\" type=\"text\"  class=\"form-control\"></div>
                    <label for=\"stn\" class=\"control-label col-md-2\">اسم المعلم</label>

                </div>  
               <div class=\"form-group\">
                    <div class=\"col-md-3\">
                        <select id=\"sts\" class=\"form-control\">
                            <option value=\"\">اختر الصف..</option>
                            <option value=\"computer\">اول</option>
                            <option value=\"biology\">ثاني</option>
                            <option value=\"handwriting\">ثالث</option>
                            <option value=\"art\">رابع</option>
                            <option value=\"handwork\">خامس</option>
                            <option value=\"study\">سادس</option>                    
                        </select>
                    </div> 
                                        <label for=\"sts\" class=\"control-label col-md-2\">الصف</label>

                    <div class=\"col-md-3\"><input id=\"stf\" type=\"number\" class=\"form-control\"></div>
                                         <label for=\"stf\" class=\"control-label col-md-2\">اسم الشعبة</label>

                </div>
                <div class=\"form-group\"><div class=\"col-md-8 col-md-offset-2\"><button class=\"btn btn-success btn-block\" onclick=\"ajax_request('add_new_record');\">اضافة</button></div></div>
            </div>
      </div>
    </div>
  </div>
       
       <div class=\"panel-group\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h4 class=\"panel-title\">
          <a data-toggle=\"collapse\" href=\"#collapse2\" class=\"\"> بحث    <span class=\"glyphicon glyphicon-search\"></span></a>
        </h4>
      </div>
      <div id=\"collapse2\" class=\"panel-collapse collapse\">
                  <div action=\"\" class=\"form-horizontal\" id=\"form_data\">
                <div class=\"form-group\">
                    <div class=\"col-md-8\"><input id=\"stn\" type=\"text\"  class=\"form-control\"></div>
                    <label for=\"stn\" class=\"control-label col-md-2\">اسم المعلم</label>

                </div>  
               <div class=\"form-group\">
                    <div class=\"col-md-3\">
                        <select id=\"sts\" class=\"form-control\">
                            <option value=\"\">اختر الصف..</option>
                            <option value=\"computer\">اول</option>
                            <option value=\"biology\">ثاني</option>
                            <option value=\"handwriting\">ثالث</option>
                            <option value=\"art\">رابع</option>
                            <option value=\"handwork\">خامس</option>
                            <option value=\"study\">سادس</option>                    
                        </select>
                    </div> 
                                        <label for=\"sts\" class=\"control-label col-md-2\">الصف</label>

                    <div class=\"col-md-3\"><input id=\"stf\" type=\"number\" class=\"form-control\"></div>
                                         <label for=\"stf\" class=\"control-label col-md-2\">اسم الشعبة</label>

                </div>
                <div class=\"form-group\"><div class=\"col-md-8 col-md-offset-2\"><button class=\"btn btn-success btn-block\" onclick=\"ajax_request('add_new_record');\">بحث</button></div></div>
            </div>
      </div>
    </div>
  </div>
       
        
         <div class=\"row\">
          <div class=\"col-sm-4 col-md-3\">
            <div class=\"thumbnail\">
              <img src=\"career-shift-how-to-become-a-substitute-teacher.jpg\" alt=\"...\">
              <div class=\"caption\">
                <h3>اسم المعلم</h3>
                <p>المواضيع التي يدرسها</p>
                <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">عرض</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">تعديل</a></p>
              </div>
            </div>
          </div>  
          <div class=\"col-sm-4 col-md-3\">
            <div class=\"thumbnail\">
              <img src=\"career-shift-how-to-become-a-substitute-teacher.jpg\" alt=\"...\">
              <div class=\"caption\">
                <h3>اسم المعلم</h3>
                <p>المواضيع التي يدرسها</p>
                <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">عرض</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">تعديل</a></p>
              </div>
            </div>
          </div>  
          <div class=\"col-sm-4 col-md-3\">
            <div class=\"thumbnail\">
              <img src=\"career-shift-how-to-become-a-substitute-teacher.jpg\" alt=\"...\">
              <div class=\"caption\">
                <h3>اسم المعلم</h3>
                <p>المواضيع التي يدرسها</p>
                <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">عرض</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">تعديل</a></p>
              </div>
            </div>
          </div>  
          <div class=\"col-sm-4 col-md-3\">
            <div class=\"thumbnail\">
              <img src=\"career-shift-how-to-become-a-substitute-teacher.jpg\" alt=\"...\">
              <div class=\"caption\">
                <h3>اسم المعلم</h3>
                <p>المواضيع التي يدرسها</p>
                <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">عرض</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">تعديل</a></p>
              </div>
            </div>
          </div>  
          <div class=\"col-sm-4 col-md-3\">
            <div class=\"thumbnail\">
              <img src=\"career-shift-how-to-become-a-substitute-teacher.jpg\" alt=\"...\">
              <div class=\"caption\">
                <h3>اسم المعلم</h3>
                <p>المواضيع التي يدرسها</p>
                <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">عرض</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">تعديل</a></p>
              </div>
            </div>
          </div>  
          <div class=\"col-sm-4 col-md-3\">
            <div class=\"thumbnail\">
              <img src=\"career-shift-how-to-become-a-substitute-teacher.jpg\" alt=\"...\">
              <div class=\"caption\">
                <h3>اسم المعلم</h3>
                <p>المواضيع التي يدرسها</p>
                <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">عرض</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">تعديل</a></p>
              </div>
            </div>
          </div>  
          <div class=\"col-sm-4 col-md-3\">
            <div class=\"thumbnail\">
              <img src=\"career-shift-how-to-become-a-substitute-teacher.jpg\" alt=\"...\">
              <div class=\"caption\">
                <h3>اسم المعلم</h3>
                <p>المواضيع التي يدرسها</p>
                <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">عرض</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">تعديل</a></p>
              </div>
            </div>
          </div>  
          <div class=\"col-sm-4 col-md-3\">
            <div class=\"thumbnail\">
              <img src=\"career-shift-how-to-become-a-substitute-teacher.jpg\" alt=\"...\">
              <div class=\"caption\">
                <h3>اسم المعلم</h3>
                <p>المواضيع التي يدرسها</p>
                <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">عرض</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">تعديل</a></p>
              </div>
            </div>
          </div>  
          <div class=\"col-sm-4 col-md-3\">
            <div class=\"thumbnail\">
              <img src=\"career-shift-how-to-become-a-substitute-teacher.jpg\" alt=\"...\">
              <div class=\"caption\">
                <h3>اسم المعلم</h3>
                <p>المواضيع التي يدرسها</p>
                <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">عرض</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">تعديل</a></p>
              </div>
            </div>
          </div>  
          <div class=\"col-sm-4 col-md-3\">
            <div class=\"thumbnail\">
              <img src=\"career-shift-how-to-become-a-substitute-teacher.jpg\" alt=\"...\">
              <div class=\"caption\">
                <h3>اسم المعلم</h3>
                <p>المواضيع التي يدرسها</p>
                <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">عرض</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">تعديل</a></p>
              </div>
            </div>
          </div>  
          <div class=\"col-sm-4 col-md-3\">
            <div class=\"thumbnail\">
              <img src=\"career-shift-how-to-become-a-substitute-teacher.jpg\" alt=\"...\">
              <div class=\"caption\">
                <h3>اسم المعلم</h3>
                <p>المواضيع التي يدرسها</p>
                <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">عرض</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">تعديل</a></p>
              </div>
            </div>
          </div>  
          <div class=\"col-sm-4 col-md-3\">
            <div class=\"thumbnail\">
              <img src=\"career-shift-how-to-become-a-substitute-teacher.jpg\" alt=\"...\">
              <div class=\"caption\">
                <h3>اسم المعلم</h3>
                <p>المواضيع التي يدرسها</p>
                <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">عرض</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">تعديل</a></p>
              </div>
            </div>
          </div>
          
          
          
        </div>";

?>