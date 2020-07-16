<form id="form1" name="form1" method="post" action="" onsubmit="return returnform(this);">
  <p>{lang_admin('application_for_sms_function')}</p>
  <p>{lang_admin('username')}
    <input type="text" name="username" id="username" />
  </p>
  <p>{lang_admin('password')}
    <input type="password" name="password" id="password" />
  </p>
  <p>{lang_admin('confirm_password')}
    <input type="password" name="password2" id="password2" />
  </p>
  <p>
      <input  name="submit" value="1" type="hidden">
    <input type="submit"  id="submit" value="{lang_admin('application_for_opening')}" />
  </p>
</form>