use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    public function test_task_creation()
    {
        $response = $this->post('/tasks', [
            'title' => 'Nova Tarefa',
            'description' => 'Descrição da tarefa',
            'status' => 'pending',
            'priority' => 'medium',
            'user_id' => 1,
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('tasks', ['title' => 'Nova Tarefa']);
    }
}
