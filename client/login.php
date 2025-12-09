<div class="container">

    <h1 class="heading">Login </h1>
    
    <form action="./server/requests.php" method="POST">
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="email" class="form-label">User Email</label>
            <input type="text" name="email" class="form-control input-item" id="email" placeholder="Enter your user email" required>
        </div>

        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="password" class="form-label">User Password</label>
            <input type="password" name="password" class="form-control input-item" id="password" placeholder="Enter your user password"required>
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <button type="submit" name="login" class="btn btn-primary">login</button>
        </div>
        <div class="fit-login"></div>
    </form>
</div>