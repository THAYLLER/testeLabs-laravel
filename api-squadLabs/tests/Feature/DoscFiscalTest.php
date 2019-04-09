<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\DocFiscal;


class DoscFiscalTest extends TestCase
{

    /**
     * Criação de um novo registro
     *
     * @return void
     */

    use RefreshDatabase;

    /**
     * @doesNotPerformAssertions
     */
    public function test_create_docFiscal()
    {

        DocFiscal::create([
            'id'=>'5',
            'Tipo'=>'S',
            'CnpjCpf'=>'44185673990',
            'Numero'=>'589016012',
            'Serie'=>'9',
            'Modelo'=>'55',
            'Chave'=>'02580776402028526166028656823411834763592077',
            'ValorTotal'=>'5989.10',
            'ValorProd'=>'5809.43',
            'ValorICMS'=>'1045.70',
            'ValorIPI'=>'464.75',
            'Status'=>'CANCELADO'
        ]);
    }
    /**
     * @doesNotPerformAssertions
     */
    public function teste_show_id_docFiscal()
    {
        $response = $this->get('/documento/fiscal/5');
        $response->assertStatus(200);
    }
    /**
     * @doesNotPerformAssertions
     */
    public function teste_show_interval_date_and_type()
    {
        $response = $this->get('/documento/fiscal/peridoEintervalor/2019-01-01 00:00:00/2019-04-09 23:59:59/S');
        $response->assertStatus(200);
    }
    /**
     * @doesNotPerformAssertions
     */
    public function teste_show_status_docFiscal()
    {
        $response = $this->get('/documento/fiscal/status/CANCELADO');
        $response->assertStatus(200);
    }
    /**
     * @doesNotPerformAssertions
     */
    public function teste_show_chave_docFiscal()
    {
        $response = $this->get('/documento/fiscal/chave/02580776402028526166028656823411834763592077');
        $response->assertStatus(200);
    }
    /**
     * @doesNotPerformAssertions
     */
    public function test_update_docFiscal()
    {
        $this->put("documento/fiscal/atualiza/5",[
            'Tipo'=>'E',
            'CnpjCpf'=>'44185673990',
            'Numero'=>'589016012',
            'Serie'=>'9',
            'Modelo'=>'55',
            'Chave'=>'02580776402028526166028656823411834763592077',
            'ValorTotal'=>'5989.10',
            'ValorProd'=>'5809.43',
            'ValorICMS'=>'1045.70',
            'ValorIPI'=>'464.75',
            'Status'=>'CANCELADO'
        ]);
    }
     /**
     * @doesNotPerformAssertions
     */
    public function teste_delete_docFiscal()
    {

        DocFiscal::destroy(5);
    }
}
