<?php

include 'config.php';
$type = $_GET["type"];
$a1 = getDetail();
$allheader = array_keys($a1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contents</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
</head>

<body>
    <div class="accordion-item">
        <div class="title">
            <table>
                <tr>
                    <td style="width: 50px;">
                        <img style="border-radius: 50%; display: block;"
                            src="https://science.kmutt.ac.th/mic/alumni/img_avatar2.png" alt="Avatar" width="50">
                    </td>
                    <td style="padding: 10px;">
                        <b>Hey, Lorem</b> <br>
                        <progress class="progressBar" value="0">
                        </progress>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <?php 
      
    foreach($allheader as  $val){ ?>
    <div class="accordion">
        <div class="accordion-item">
            <div class="accordion-item-header">
                <?php  echo $val; ?>
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    <ul>
                        <?php foreach($a1[$val] as $key => $valx){ ?>
                        <li>
                            <label>
                                <input type="checkbox" name="box1" id="checker" class="task">
                                <p>
                                    <?php print_r($valx); ?>
                                </p>
                                <span></span>
                            </label>
                        </li>
                        <?php }?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <?php } ?>

    <script type="text/javascript">
        const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

        accordionItemHeaders.forEach(accordionItemHeader => {
            accordionItemHeader.addEventListener("click", event => {
                const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-accordion-item-header.active");

                accordionItemHeader.classList.toggle("active");
                const accordionItemBody = accordionItemHeader.nextElementSibling;
            });
        });
    </script>

    <script>
        function init() {
            let value = 0;

            setProgression();
        }


        function setProgression() {
            const tasks = Array.from(document.querySelectorAll('.task'));
            const progressBar = document.querySelector('.progressBar');

            // Set max value to the progress bar
            const max = 100;
            progressBar.setAttribute('max', max);

            tasks.forEach(task => task.addEventListener('click', function () {
                const tasksChecked = tasks.filter(task => task.checked);
                // Set current value to the progress bar
                const value = (tasksChecked.length / tasks.length) * 100
                progressBar.setAttribute('value', value)
            }))
        }
        window.onload = init
    </script>

</body>

</html>