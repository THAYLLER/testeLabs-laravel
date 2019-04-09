import { Component, OnInit } from '@angular/core';

import { DocFiscalService } from '../docFiscal.service';
import { DocFiscal } from '../shared/docFiscal.model';



@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css'],
  providers: [DocFiscalService]
})
export class HomeComponent implements OnInit {

  public docFiscal: DocFiscal[];

  constructor(private docFiscalService:DocFiscalService ){}

  ngOnInit(){

    this.docFiscalService.getDocFiscal()
      .then((docFiscal: DocFiscal[]) => {

        this.docFiscal = docFiscal;
      });
  }
  public buscar(chave: String):void  {

    this.docFiscalService.getBuscaPorChave(String(chave))
      .then((docFiscal: DocFiscal[]) => {

        this.docFiscal = docFiscal;
      });
  }
  public buscarPeriodo(valorDtIni: String,valorDtFim: String,valorTipo: String):void  {

    this.docFiscalService.getBuscarPeriodochave(String(valorDtIni),String(valorDtFim),String(valorTipo))
    .then((docFiscal: DocFiscal[]) => {

      this.docFiscal = docFiscal;
    });
  }
}
