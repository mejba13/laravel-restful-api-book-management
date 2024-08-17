<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Book;

class BookApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_list_books()
    {
        $response = $this->getJson('/api/books');

        $response->assertStatus(200);
    }

    public function test_can_create_book()
    {
        $data = [
            'title' => 'Test Book',
            'author' => 'Test Author',
            'published_year' => '2024',
            'description' => 'Test Description',
        ];

        $response = $this->postJson('/api/books', $data);

        $response->assertStatus(201);
        $response->assertJson($data);
    }

    public function test_can_show_book()
    {
        $book = Book::factory()->create();

        $response = $this->getJson("/api/books/{$book->id}");

        $response->assertStatus(200);
        $response->assertJson($book->toArray());
    }

    public function test_can_update_book()
    {
        $book = Book::factory()->create();
        $data = ['title' => 'Updated Title'];

        $response = $this->putJson("/api/books/{$book->id}", $data);

        $response->assertStatus(200);
        $response->assertJsonFragment($data);
    }

    public function test_can_delete_book()
    {
        $book = Book::factory()->create();

        $response = $this->deleteJson("/api/books/{$book->id}");

        $response->assertStatus(204);
    }
}
