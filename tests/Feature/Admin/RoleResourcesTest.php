<?php

namespace Admin;

use App\Filament\Resources\ArticleResource;
use App\Filament\Resources\Shield\RoleResource;
use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class RoleResourcesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(User::factory()->admin()->create());
    }

    public function test_index_page_can_be_rendered()
    {
        $this->get(RoleResource::getUrl())->assertSuccessful();
    }

    public function test_create_page_can_be_rendered()
    {
        $this->get(RoleResource::getUrl('create'))->assertSuccessful();
    }

    public function test_edit_page_can_be_rendered()
    {
        $this->get(RoleResource::getUrl('edit', [
            'record' => Role::findOrCreate('admin'),
        ]))->assertSuccessful();
    }

    public function test_view_page_can_be_rendered()
    {
        $this->get(RoleResource::getUrl('view', [
            'record' => Role::findOrCreate('admin'),
        ]))->assertSuccessful();
    }

    public function test_settings_page_can_be_rendered()
    {
        $this->get(RoleResource::getUrl('settings'))->assertSuccessful();
    }
}
