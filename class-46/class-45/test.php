$table->string('category_name');
$table->text('image');
$table->tinyInteger('status')->default(1)->comment('1=published, 0 = unpublished');

