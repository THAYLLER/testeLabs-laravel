import { DocFiscal } from "./shared/docFiscal.model";

import { Http } from "@angular/http";
import { Injectable } from "@angular/core";


@Injectable()
export class DocFiscalService {

  private url_base = 'http://localhost:8001/documento/fiscal';

  constructor(private http: Http) {}


  public getDocFiscal(): Promise<DocFiscal[]> {

    return this.http.get(this.url_base)
        .toPromise()
        .then((resposta: any) =>resposta.json());
  }

  public getBuscaPorChave(chave:string): Promise<any> {
    
    return this.http.get(`${this.url_base}/chave/${chave}`)
            .toPromise()
            .then((resposta: any) =>{
              
              return resposta.json();
            })
  }
  public getBuscarPeriodochave(valorDtIni: String,valorDtFim: String,valorTipo: String): Promise<any> {
    
    return this.http.get(`${this.url_base}/peridoEintervalor/${valorDtIni} 00:00:00/${valorDtFim} 00:00:00/${valorTipo}`)
            .toPromise()
            .then((resposta: any) =>{
              
              return resposta.json();
            })
  }
}
