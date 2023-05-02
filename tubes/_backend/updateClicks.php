<?php
function updateClicks()
{
  connect();
  $query = query("SELECT update_data FROM popularity");
  $date_array = explode("-", $query[0]['update_data']);
  $day = $date_array[2];
  $month = $date_array[1];
  $rl_date = date('y-m-d');
  // checking
  // daily
  if (date('d') != $day) {
    clicks("UPDATE popularity SET daily = 0 WHERE update_data != '$rl_date'");
  }

  // monthly
  if (date('m') != $month) {
    clicks("UPDATE popularity SET monthly = 0 WHERE update_data != '$rl_date'");
  }

  clicks("UPDATE popularity SET update_data = now() WHERE update_data != '$rl_date'");
}
function clicks($query)
{
  $db = connect();

  mysqli_query($db, $query);
}
