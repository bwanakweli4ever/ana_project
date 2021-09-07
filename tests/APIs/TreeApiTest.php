<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Tree;

class TreeApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_tree()
    {
        $tree = factory(Tree::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/trees', $tree
        );

        $this->assertApiResponse($tree);
    }

    /**
     * @test
     */
    public function test_read_tree()
    {
        $tree = factory(Tree::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/trees/'.$tree->id
        );

        $this->assertApiResponse($tree->toArray());
    }

    /**
     * @test
     */
    public function test_update_tree()
    {
        $tree = factory(Tree::class)->create();
        $editedTree = factory(Tree::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/trees/'.$tree->id,
            $editedTree
        );

        $this->assertApiResponse($editedTree);
    }

    /**
     * @test
     */
    public function test_delete_tree()
    {
        $tree = factory(Tree::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/trees/'.$tree->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/trees/'.$tree->id
        );

        $this->response->assertStatus(404);
    }
}
