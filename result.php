<?php

if ($_REQUEST["name"] == "ps") {
    header("location:index.php?message=success");
} else {
    header("location:index.php?message=error");
}