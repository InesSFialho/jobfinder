<?php include 'inc/header.php'; ?>
    <h2 class="page-header">Edit Job Listing</h2>
    <form method="post" action="edit.php?id=<?php echo $job->id; ?>">
        <div class="form-group">
            <label>Company</label>
            <input type="text" name="company" value="<?php echo $job->company; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category_id" class="form-control">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <?php if($job->category_id == $category->id): ?>
                        <option value="<?php echo $category->id; ?>" selected><?php echo $category->name; ?></option>
                    <?php else: ?>
                    <?php endif; ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Job Title</label>
            <input type="text" name="job_title" value="<?php echo $job->job_title; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" cols="30" rows="2"><?php echo $job->description; ?></textarea>
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" value="<?php echo $job->location; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="text" name="salary" value="<?php echo $job->salary; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Contact User</label>
            <input type="text" name="contact_user" value="<?php echo $job->contact_user; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" name="contact_email" value="<?php echo $job->contact_email; ?>" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
    </form>
<?php include 'inc/footer.php'; ?>