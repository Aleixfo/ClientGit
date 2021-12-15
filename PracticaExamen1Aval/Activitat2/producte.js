//Constructor + parametres esperats
function Producte(ref, nom, marca, categ, pvp) {

    //Atributs de la classe
    this.ref = ref;
    this.nom = nom;
    this.marca = marca;
    this.categ = categ;
    this.pvp = pvp;


    //Com fer Metode toString
    this.print = print;

    function print() {
        return this.ref + " - " + this.nom + " - " + this.marca + " - " + this.categ + " - " + this.pvp;
    }

    // Descompte
    this.discount = discount;

    function discount(quant) {
        this.pvp *= quant;
    }

}