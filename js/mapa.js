class CountryCollection{

    constructor (items){
        this.items=items
    }


    static get(){
        return new CountryCollection(document.querySelectorAll("path"))
    }
}

class CountryPath{
    constructor(element){
        this.element=element
    }

    fill(color){
        this.element.setAttribute("fill", color)
    }

    setPopulation(population){
        this.element.setAttribute("population", population)
    }

    static findByName(name){
        return new CountryPath(document.getElementById(name))
    }

}


console.log(CountryCollection.get())



