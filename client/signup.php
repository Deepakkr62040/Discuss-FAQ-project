<div class="container">
    <h1 class="heading">Signup </h1>
    <form method="POST" action="./server/requests.php">
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="username" class="form-label">User Name :</label>
            <input type="text" name="username" class="form-control input-item" id="username" placeholder="Enter your user name" required>
        </div>

        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="email" class="form-label">User Email :</label>
            <input type="text" name="email" class="form-control input-item" id="email" placeholder="Enter your user email" required>
        </div>

        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="password" class="form-label">User Password :</label>
            <input type="password" name="password" class="form-control input-item" id="password" placeholder="Enter your user password" required>
        </div>

        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="address" class="form-label">User Address :</label>
            <input type="text" name="address" class="form-control input-item" id="address" placeholder="Enter your user address" required>
        </div>

        <div class="col-6 offset-sm-3 margin-bottom-15">
            <button type="submit" name="signup" class="btn btn-primary">SignUp</button>
        </div>
        <div class="fit-signup"></div>
    </form>
</div>