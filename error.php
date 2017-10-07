<?php
   function setError($value)
  {
     setcookie('DOE_error',$value, time()+3600);
  }

   function getError()
  {
   if (	isset($_COOKIE['DOE_error']))
  	{
  		echo $_COOKIE['DOE_error'];
    }
   }

  function delError()
  {
     if ( isset($_COOKIE['DOE_error']))
    {
         setcookie('DOE_error','',1);
    }
  }

  function setLog($value)
  {
    setcookie('DOE_log',$value,time()+3600) ;
  }

  function getLog()
  {
   if ( isset($_COOKIE['DOE_log']))
    {
      echo $_COOKIE['DOE_log'];
    }
  }

  function delLog()
  {
   if ( isset($_COOKIE['DOE_log']))
  {
       setcookie('DOE_log','',1);
  }

   }
  function setInfo($value)
  {
     setcookie('DOE_info',$value,time()+3600) ;
  }

  function getInfo()
  {
    if (isset($_COOKIE['DOE_info']))
    {
        echo $_COOKIE['DOE_info'] ;
    }
  }

  function delInfo()
  {
    if ( isset($_COOKIE['DOE_info']))
   {
        setcookie('DOE_info','',1);
   }
  }

  getError();
  getLog();
  getInfo();
?>
