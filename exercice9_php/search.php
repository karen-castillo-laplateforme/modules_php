<?php
  $search = trim($_GET["search"] ?? "");
  $search = htmlspecialchars($search, ENT_QUOTES);
?>