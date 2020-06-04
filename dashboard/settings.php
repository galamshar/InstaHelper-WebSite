<a href="../index.php"><h2 style="font-size: 1.5em;">INSTAHELPER</h2></a>
<div class="general-block" style="height: auto">
    <div class="settings-block">
        <h2 style="font-size: 1.5em; margin-top: 30px">USER INFORMATION</h2>
        <div class="user-info">
            <p>ID : <span id="user-id"></span></p>
            <p>Username : <span id="user-name"></span></p>
            <p>Plan : <span id="sub-type"></span></p>
            <p id="email">Email : <span id="user-email"></span></p>
            <p>Role : <span id="user-role"></span></p>
        </div>
        <h2 style="font-size: 1.5em;">CHANGE PASSWORD</h2>
        <div class="change-pwd">
            <form method="post" id="changepwd">
                <input type="password" id="oldpwd" name="oldpwd" placeholder="Current password">
                <input type="password" id="newpwd" name="newpwd" placeholder="New password">
                <input type="password" id="confirmpwd" name="confirmpwd" placeholder="Confirm password">
                <button type="button" onclick="changePwd()">Change</button>
                <br>
                <span id="changepwd-errormsg"></span>
            </form>
        </div>
    </div>
</div>
<script>
    change();
</script>