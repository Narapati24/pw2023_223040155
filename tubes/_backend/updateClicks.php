<?php

function clicks($query)
{
  $db = connect();

  $result = mysqli_query($db, $query);
}
