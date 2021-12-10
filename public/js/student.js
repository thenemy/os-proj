class Student{

    constructor(name, status, id) {
        this.name = name;
        this.status = status;
        this.id = id;
    }
    getName(){
        let status;
        if (status === 0){
            alert('player.active')
        }
    }
    active(status){
        if (status === true ){
            console.log('hello');
            //turn card active
        }
        else if (status === false){
            console.log('bye')
            //turn card sleeping
        }
    }
}
