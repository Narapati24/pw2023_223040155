<?php
function updateClicks($id)
{
  connect();
  $query = query("SELECT update_data FROM popularity WHERE article_id = $id");
  $date_array = explode("-", $query[0]['update_data']);
  $day = $date_array[2];
  $month = $date_array[1];

  // checking
  // daily
  if (date('d') != $day) {
    clicks("UPDATE popularity SET daily = 0 WHERE article_id = $id");
  }

  // monthly
  if (date('m') != $month) {
    clicks("UPDATE popularity SET monthly = 0 WHERE article_id = $id");
  }
}
function clicks($query)
{
  $db = connect();

  mysqli_query($db, $query);
}
