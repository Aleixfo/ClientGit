class Cotxo{

    constructor(matricula, marca, color, preu){
        this.matricula = matricula;
        this.marca = marca;
        this.color = color;
        this.preu = preu;

        this.divisa = "€";
    }

    info(){
        return this.matricula+","+this.marca+","+
        this.color+","+this.preu+this.divisa+".";
    }

    convert2Dolars(){
        if (this.divisa=="€"){
        this.preu *= 1.16;
        this.divisa = "$";
        }
    }

    convert2Euros(){
        if (this.divisa=="$"){
        this.preu /= 1.16;
        this.divisa = "€";
        }
    }






}