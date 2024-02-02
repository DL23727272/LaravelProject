// database/migrations/create_messages_table.php

public function up()
{
    Schema::create('messages', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email');
        $table->string('subject');
        $table->text('message');
        $table->timestamps();
    });
}
