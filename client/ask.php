<div class="container">
    <h1 class="heading">Ask A Questions </h1>
    <form method="POST" action="./server/requests.php">
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter question">
        </div>

        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control desc" id="description" placeholder="Enter description"></textarea>
        </div>

        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="category" class="form-label">Category</label>
            <?php
            include ("category.php");
            ?>
        </div>

        <div class="col-6 offset-sm-3 margin-bottom-15">
            <button type="submit" name="ask" class="btn btn-primary">Ask Question</button>
        </div>
        <div class="fit-ask"></div>
    </form>
</div>