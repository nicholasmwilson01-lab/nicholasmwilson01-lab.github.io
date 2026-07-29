<!DOCTYPE html>
<html lang="en">

<!--
  Name: Nick
  Date: 5/18/26
  Course: 7355
  Description: Web Dev Template
-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources</title>
    <!--CSS style sheet link-->
    <link rel="stylesheet" type="text/css" href="https://nicholasmwilson01-lab.github.io/webdevelopment/style.css">
    <link rel="stylesheet" type="text/css" href="https://nicholasmwilson01-lab.github.io/webdevelopment/nav.css">

    <!--Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    

    <!--
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">
-->
</head>

<!--Header for logo/title-->
<?php include 'header.php'; ?>


<!--Body for majority of text-->
<body>
    <!-- Custom font used here -->
    <div class="resourcewrapper">
        <h1>Archival Resources</h1>
            <div class="resources">
                <!-- Custom font used here -->
                <h2>State History</h2>
                    <ul>
                        <br>
                        <li><a href="http://www.anchoragelibrary.org/resources/research/alaska-collection/">Anchorage Public Library</a></li>
                        <br>
                        <li><a href="https://archives.consortiumlibrary.org/">UAA/UAP Consortium Library</a></li>
                        <br>
                        <li><a href="https://library.uaf.edu/aprca">Alaska and Polar Regions Archive</a></li>
                        <br>
                        <li><a href="https://library.alaska.gov/hist/">Alaska State Archives</a></li>
                        <br>
                        <li><a href="https://www.arlis.org/collections/special-collections/">Alaska Resources Library</a></li>
                        <br>
                    </ul>
                <!-- Custom font used here -->
                <h2>Genealogy</h2>
                    <ul>
                        <br>
                        <li><a href="http://www.anchoragegenealogy.org/">Anchorage Genealogical Society</a></li>
                        <br>
                    </ul>
                <!-- Custom font used here -->
                <h2>Special Archives</h2>
                    <ul>
                        <br>
                        <li><a href="https://www.amipa.org/">Alaska Moving Image Preservation Association</a></li>
                        <br>
                        <li><a href="https://vilda.alaska.edu/digital/search">Alaska's Digital Archives</a></li>
                        <br>
                    </ul>
                <br>
            </div>
        <!-- Custom font used here -->
        <h1>References</h1>

            <!--Pseudo elements at bottom of style.css-->
            <div class="references">
                <table>
                    <caption>Anchorage Herald Resources</caption>
                    <thead>
                        <tr>
                            <th scope="col">Source</th>
                            <th scope="col">Citation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Anchorage Public Library</th>
                            <td>Anchorage Public Library. (n.d.). Alaska collection. http://www.anchoragelibrary.org/resources/research/alaska-collection/</td>
                        </tr>
                        <tr>
                            <th scope="row">UAA/UAP Consortium Library</th>
                            <td>University of Alaska-Anchorage and Alaska Pacific University Consortium Library. (n.d.). Archives and special collections. https://archives.consortiumlibrary.org/</td>
                        </tr>
                        <tr>
                            <th scope="row">Alaska and Polar Regions Archive</th>
                            <td>University of Alaska-Fairbanks. (2026, June 26). Alaska and polar regions collections & archives (APRCA). https://library.uaf.edu/aprca</td>
                        </tr>
                        <tr>
                            <th scope="row">Alaska State Archives</th>
                            <td>State of Alaska. (2025, October 8). Alaska historical collections. https://library.alaska.gov/hist/</td>
                        </tr>
                        <tr>
                            <th scope="row">Alaska Resources Library</th>
                            <td>Alaska Resources Library and Information Services. (n.d.). Collections. https://www.arlis.org/collections/special-collections/</td>
                        </tr>
                        <tr>
                            <th scope="row">Anchorage Genealogical Society</th>
                            <td>Anchorage Genealogical Society. (n.d.). https://www.anchoragegenealogy.org/</td>
                        </tr>
                        <tr>
                            <th scope="row">Alaska Moving Image Preservation Association</th>
                            <td>Alaska Moving Image Preservation Association. (n.d.). Collections. https://www.amipa.org/</td>
                        </tr>
                        <tr>
                            <th scope="row">Alaska's Digital Archives</th>
                            <td>Alaska's Digital Archives. (n.d.). Collections. https://vilda.alaska.edu/digital/search</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        <br>
    </div>    
</body>

<!--Footer for widgets/links-->
<?php include 'footer.php'; ?>
