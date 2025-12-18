<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskApiTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_api_can_save_and_list_tasks(): void
    {
        // 1. Post a new task
        $this->postJson('/api/tasks', ['title' => 'My First Task'])
            ->assertStatus(201);

        // 2. Check the database
        $this->assertDatabaseHas('tasks', ['title' => 'My First Task']);

        // 3. Check the list API
        $this->getJson('/api/tasks')
            ->assertStatus(200)
            ->assertJsonFragment(['title' => 'My First Task']);
    }

    public function test_api_can_delete_a_task(): void
    {
        // Create a task first
        $task = \App\Models\Task::create(['title' => 'Task to be deleted']);

        // Delete it via the API
        $this->deleteJson('/api/tasks/' . $task->id)
            ->assertStatus(200);

        // Verify it's gone from the database
        $this->assertDatabaseMissing('tasks', ['id' => $task->id]);
    }

    public function test_api_can_update_task_status(): void
    {
        $task = \App\Models\Task::create(['title' => 'Unfinished Task']);

        $this->patchJson('/api/tasks/' . $task->id, [
            'is_completed' => true
        ])->assertStatus(200);

        $this->assertDatabaseHas('tasks', [
            'id' => $task->id,
            'is_completed' => true
        ]);
    }
}
