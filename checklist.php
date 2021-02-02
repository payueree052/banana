<?php
include 'config.php';
$a1 = getDetail();
$allheader = array_keys($a1);

if (isset($_GET['type'])) {
    $a1 = getDetail($_GET['type']);
    $allheader = array_keys($a1);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklists</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
    <!-- <style>
        body {
            background-color: whitesmoke;
            margin: 0;
            font-family: 'Sarabun', sans-serif;
        }

        .header {
            padding: 10px;
            background: #fff;
        }

        div.scrollmenu {
            overflow: auto;
            overflow-x: scroll;
            white-space: nowrap;
        }

        div .scrollmenu::-webkit-scrollbar {
            display: none;
        }

        div.scrollmenu a {
            display: inline-block;
            color: black;
            text-align: center;
            padding: 15px;
            text-decoration: none;
        }

        div.scrollmenu a:hover {
            background-color: cornflowerblue;
            border-radius: 1rem;
            color: white;
        }
        div.scrollmenu a:focus {
            background-color: while;
            border-radius: 1rem;
            color: white;
        }
    </style> -->
</head>

<body>
    <div class="header">
        <div class="scrollmenu">
            <a href="checklist.php?type=newborn">แรกเกิด</a>
            <a href="checklist.php?type=week2">1 สัปดาห์</a>
            <a href="checklist.php?type=week3">2 สัปดาห์</a>
            <a href="checklist.php?type=newborn">3 สัปดาห์</a>
            <a href="checklist.php?type=newborn">1 เดือน</a>
            <a href="checklist.php?type=newborn">2 เดือน</a>
            <a href="checklist.php?type=newborn">3 เดือน</a>
            <a href="checklist.php?type=newborn">4 เดือน</a>
            <a href="checklist.php?type=newborn">5 เดือน</a>
            <a href="checklist.php?type=newborn">6 เดือน</a>
            <a href="checklist.php?type=newborn">7 เดือน</a>
            <a href="checklist.php?type=newborn">8 เดือน</a>
            <a href="checklist.php?type=newborn">9 เดือน</a>
            <a href="checklist.php?type=newborn">10 เดือน</a>
            <a href="checklist.php?type=newborn">11 เดือน</a>
            <a href="checklist.php?type=newborn">12 เดือน</a>
            <a href="checklist.php?type=newborn">13 เดือน</a>
            <a href="checklist.php?type=newborn">14 เดือน</a>
            <a href="checklist.php?type=newborn">15 เดือน</a>
            <a href="checklist.php?type=newborn">16 เดือน</a>
            <a href="checklist.php?type=newborn">17 เดือน</a>
            <a href="checklist.php?type=newborn">18 เดือน</a>
            <a href="checklist.php?type=newborn">19 เดือน</a>
            <a href="checklist.php?type=newborn">20 เดือน</a>
            <a href="checklist.php?type=newborn">21 เดือน</a>
            <a href="checklist.php?type=newborn">22 เดือน</a>
            <a href="checklist.php?type=newborn">23 เดือน</a>
            <a href="checklist.php?type=newborn">24 เดือน</a>
            <a href="checklist.php?type=newborn">25 เดือน</a>
            <a href="checklist.php?type=newborn">26 เดือน</a>
            <a href="checklist.php?type=newborn">27 เดือน</a>
            <a href="checklist.php?type=newborn">28 เดือน</a>
            <a href="checklist.php?type=newborn">29 เดือน</a>
            <a href="checklist.php?type=newborn">30 เดือน</a>
            <a href="checklist.php?type=newborn">1 เดือน</a>
            <a href="checklist.php?type=newborn">1 เดือน</a>
            <a href="checklist.php?type=newborn">1 เดือน</a>
        </div>
    </div>
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