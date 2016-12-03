<div class="form-group">
    <label for="ProductName">Product Name:</label>
    <input type="text" name="ProductName" value="<?php echo htmlspecialchars($ProductName) ?>">
</div>

<div class="form-group">
    <label for="Description">Description:</label>
    <textarea name="Description" form="update_product"><?php echo htmlspecialchars($Description) ?></textarea>
</div>

<div class="form-group">
    <label for="Stock">Stock:</label>
    <input type="number" name="Stock" value="<?php echo htmlspecialchars($Stock) ?>">
</div>

<div class="form-group">
    <label for="PriceEach">Price Each:</label>
    <input type="number" step="0.01" name="PriceEach" value="<?php echo htmlspecialchars($PriceEach) ?>">
</div>

<div class="form-group">
    <label for="ImagePath">Image Path:</label>
    <input type="text" name="ImagePath" value="<?php echo htmlspecialchars($ImagePath) ?>">
</div>

<div class="form-group">
    <label for="CategoryId">Category:</label>
    <input type="number" name="CategoryId" value="<?php echo htmlspecialchars($CategoryId) ?>">
</div>

<div class="form-group">
    <label for="IsFeatured">Is Featured:</label>
    <input type="checkbox" class="chk" name="IsFeatured" value="1" <?php if ($IsFeatured == TRUE) echo "checked='checked'"; ?>>
</div>