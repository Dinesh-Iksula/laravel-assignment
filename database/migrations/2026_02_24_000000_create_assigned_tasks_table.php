<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('assigned_tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('assignor_id');
            $table->integer('assignee_id')->index();
            $table->integer('house_id');
            $table->unsignedInteger('mls_id')->nullable();
            $table->integer('category')->nullable();
            $table->string('subcategory')->nullable();
            $table->boolean('is_qa_task')->default(false);
            $table->boolean('is_draft')->default(false);
            $table->string('title');
            $table->longText('description')->nullable();
            $table->longText('task_description')->nullable();
            $table->string('description_document_cta_button_label')->nullable();
            $table->longText('remember_instructions')->nullable();
            $table->string('primary_cta_label')->nullable();
            $table->string('secondary_cta_label')->nullable();
            $table->string('image_link')->nullable();
            $table->string('image_caption')->nullable();
            $table->string('video_link')->nullable();
            $table->string('video_caption')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('task_explain_doc')->nullable();
            $table->string('status')->nullable()->index();
            $table->tinyInteger('cancelled_flag')->default(0);
            $table->tinyInteger('is_task_mandatory')->nullable();
            $table->tinyInteger('is_acknowledged_mandatory')->nullable();
            $table->longText('acknowledgement_statement')->nullable();
            $table->timestamp('acknowledgement_timestamp')->nullable();
            $table->tinyInteger('is_comment_mandatory')->nullable();
            $table->longText('question_to_seller')->nullable();
            $table->longText('comment')->nullable();
            $table->longText('rejection_reason')->nullable();
            $table->tinyInteger('is_doc_mandatory')->nullable();
            $table->integer('reminder_id')->default(0);
            $table->text('doc_path')->nullable();
            $table->string('master_doc_type')->nullable();
            $table->integer('master_id')->nullable();
            $table->integer('custom_task_flag')->default(0);
            $table->longText('accept_comment')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('comment_timestamp')->nullable();
            $table->timestamp('accept_comment_timestamp')->nullable();
            $table->timestamp('reject_comment_timestamp')->nullable();
            $table->string('virtual_tour')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assigned_tasks');
    }
};
