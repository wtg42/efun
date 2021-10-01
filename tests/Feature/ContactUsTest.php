<?php

namespace Tests\Feature;

use App\Http\Livewire\EfunContactForm;
use App\Http\Livewire\EfunContactUsList;
use App\Models\ContactUs;
use App\Models\User;
use Exception;
use Faker\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use InvalidArgumentException as GlobalInvalidArgumentException;
use Laravel\Sanctum\Sanctum;
use Livewire\Livewire;
use LogicException;
use PHPUnit\Framework\ExpectationFailedException;
use SebastianBergmann\RecursionContext\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Tests\TestCase;

class ContactUsTest extends TestCase
{
    /**
     * 首頁 Contact Us 表單測試。
     * @return void
     * @throws LogicException
     * @throws BadRequestException
     * @throws InvalidArgumentException
     * @throws ExpectationFailedException
     * @throws Exception
     * @throws GlobalInvalidArgumentException
     */
    public function testContactUsForm()
    {
        $response = $this->get('/');

        $response->assertStatus(200)->assertViewIs('layouts.efun');

        $response->assertSeeLivewire('efun-contact-form');

        $response->assertSee('選一帆，永遠一帆風順。');

        Livewire::test(EfunContactForm::class)
            ->assertSeeHtml('<h4 class="text-2xl font-semibold">想與我們聯繫？</h4>')
            ->set('name', Factory::create()->unique()->userName)
            ->set('email', Factory::create()->unique()->safeEmail)
            ->set('message', Factory::create()->realTextBetween(10, 50, 3))
            ->call('submitForm')
            ->assertSee('已收到你的提交資料，我們會盡快與你聯絡。');
    }

    /**
     * Contact Us List test.
     * @return void
     * @throws InvalidArgumentException
     * @throws ExpectationFailedException
     * @throws BindingResolutionException
     * @throws LogicException
     * @throws BadRequestException
     */
    public function testContactUsList()
    {
        // 未登入重導向到登入頁面。
        $response = $this->get('/contact-us-list');

        $response->assertStatus(302);

        // 登入顯示首頁資訊
        $response = Sanctum::actingAs(User::factory()->create());

        $response = $this->get('/contact-us-list');

        $response->assertStatus(200)
            ->assertViewIs('workbench-contact-us-view')
            ->assertSeeLivewire('efun-contact-us-list')
            ->assertSee('Contact Us List');

        // 隨機刪除一筆資料
        $randomID = ContactUs::inRandomOrder()->limit(1)->get('id')->first()['id'];
        Livewire::test(EfunContactUsList::class)
            ->call('removeFromTableRow', $randomID);
        $this->assertNotTrue(ContactUs::whereId($randomID)->exists());
    }
}
