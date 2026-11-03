<?php

namespace Tests\Feature;

use Tests\TestCase;

class ConferenceWorkflowTest extends TestCase
{
    public function test_roles_filter_events_and_registration_updates_employee_list(): void
    {
        $this->get('/client')->assertOk()->assertSee(__('messages.conference_web_title'))->assertDontSee(__('messages.conference_archive_title'));
        $this->get('/employee')->assertOk()->assertSee(__('messages.conference_archive_title'));
        $this->get('/client/conferences/3')->assertNotFound();
        $this->post('/client/conferences/3/registrations')->assertNotFound();
        $this->get('/employee/conferences/2')->assertSee(__('messages.no_participants'));
        foreach ([1, 2] as $attempt) {
            $this->post('/client/conferences/2/registrations')->assertRedirect(route('client.show', 2));
        }
        $this->assertSame([1], session('sd1.events')[2]['participants']);
        $this->get('/employee/conferences/2')->assertOk()->assertSee('arnas@example.test');
        $this->get('/employee/conferences/999')->assertNotFound();
    }

    public function test_admin_crud_validation_and_deletion_guard(): void
    {
        $data = ['title' => 'QA conference', 'description' => 'Program', 'speaker' => 'Speaker', 'date' => now()->addMonth()->toDateString(), 'time' => '14:00', 'address' => 'Vilnius'];
        $this->get('/admin/conferences/create')->assertOk();
        $this->post('/admin/conferences', [])->assertSessionHasErrors(array_keys($data));
        $this->post('/admin/conferences', $data)->assertRedirect(route('admin.conferences.index'));
        $this->get('/admin/conferences/4/edit')->assertOk()->assertSee('QA conference')->assertSee('Vilnius');
        $this->post('/client/conferences/4/registrations')->assertRedirect();
        $this->put('/admin/conferences/4', array_merge($data, ['address' => 'Kaunas']))->assertRedirect();
        $this->get('/employee/conferences/4')->assertSee('Kaunas')->assertSee('arnas@example.test');
        $this->delete('/admin/conferences/3')->assertForbidden();
        $this->delete('/admin/conferences/4')->assertRedirect();
        $this->get('/employee/conferences/4')->assertNotFound();
        $this->get('/employee/conferences/3')->assertOk();
    }

    public function test_user_editor_validates_and_updates_registered_participant(): void
    {
        $this->get('/admin/users')->assertOk()->assertSee('mantas@example.com');
        $this->get('/admin/users/2/edit')->assertOk()->assertSee('Kazlauskas');
        $this->put('/admin/users/2', ['email' => 'bad'])->assertSessionHasErrors(['first_name', 'last_name', 'email']);
        $this->put('/admin/users/2', ['first_name' => 'Matas', 'last_name' => 'Testas', 'email' => 'matas@example.test'])->assertRedirect();
        $this->get('/employee/conferences/1')->assertOk()->assertSee('matas@example.test')->assertDontSee('mantas@example.com');
    }
}
