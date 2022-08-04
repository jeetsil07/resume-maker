<?php
            if(isset($_POST['submit'])){ 


$html ='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
   <table>
       <tr>
        <td class="image" colspan="2">
            <img src="image/jeet.jpg" alt="" width="150" height="150">
            <h1>'.$_POST['name'].'</h1>
        </td>
       </tr>
       <tr>
            <td class="section"><h1>ABOUT ME</h1></td>
            <td class="content"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo et ipsa numquam possimus dicta ipsam sint laborum ex excepturi laboriosam neque, nesciunt quidem molestiae eligendi porro quod praesentium consectetur voluptate Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore perferendis voluptas, beatae voluptatum labore ab repellendus minima sapiente sit necessitatibus nisi amet, quisquam rerum nemo molestias? Suscipit neque, laboriosam obcaecati tempore, veniam ratione laudantium iusto distinctio nam soluta numquam in eos. Fuga nobis hic illo mollitia reiciendis nostrum, recusandae similique!</p></td>
       </tr>
       <tr>
            <td><h1>EDUCATION</h1></td>
            <td>
                <div class="edu x">
                    <p><b>X-th (2015)</b></p>
                    <p>Serampore Malina Lahiri Boys Academy</p>
                    <p>West Benagal Board of Secondary Education</p>
                    <p>Grade:&emsp;70%</p>
                </div>
                <div class="edu xii">
                    <p><b>X-th (2015)</b></p>
                    <p>Serampore Malina Lahiri Boys Academy</p>
                    <p>West Benagal Board of Secondary Education</p>
                    <p>Grade:&emsp;70%</p>
                </div>';?>
                <?php foreach($_POST['highins'] as $key => $val){ 
                $html .='<div class="edu high">
                    <p><b>Bachelor of Science (Botany hons.) (2017 - 2020)</b></p>
                    <p>'.$_POST['highins'][$key].'</p>
                    <p>'.$_POST['degree'][$key].'</p>
                    <p>'.$_POST['univ'][$key].'</p>
                    <p>Grade:&emsp;70%</p>
                </div>';}?>
                
           <?php $html .=' </td>
       </tr>
       <tr>
            <td><h1>Experience</h1></td>
            <td>
                <div class="exp">
                    <p><b>Webdevelopment</b></p>
                    <p><b>Years:&ensp;3years</b></p>
                </div>
            </td>
       </tr>
       <tr>
            <td><h1>Projects</h1></td>
            <td>
                <div class="project">
                    <p><b>Prohect Title</b></p>
                    <p>project link&ensp;<a href="">http://localhost/web-project/Resume%20Generator/resume.php</a></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet rerum consequatur sunt consectetur accusamus consequuntur aperiam, aliquid quos qui incidunt.</p>
                </div>
                <div class="project">
                    <p><b>Prohect Title</b></p>
                    <p>project link&ensp;<a href="">http://localhost/web-project/Resume%20Generator/resume.php</a></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet rerum consequatur sunt consectetur accusamus consequuntur aperiam, aliquid quos qui incidunt.</p>
                </div>
                <div class="project">
                    <p><b>Prohect Title</b></p>
                    <p>project link&ensp;<a href="">http://localhost/web-project/Resume%20Generator/resume.php</a></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet rerum consequatur sunt consectetur accusamus consequuntur aperiam, aliquid quos qui incidunt.</p>
                </div>
            </td>
       </tr>
   </table>
</body>
</html>';


include "vendor/autoload.php";
$mpdf = new \Mpdf\Mpdf();
$mpdf->SetDisplayMode('fullpage');
$style= file_get_contents('css/style.css');
$mpdf->WriteHTML($style,1);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit();
}
?>
                 