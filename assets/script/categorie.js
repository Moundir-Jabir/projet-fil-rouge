let bloc = document.querySelector("#dynamique")
let categorie = document.querySelector("#categorie")

categorie.addEventListener('change', (e) => {
    let result = e.target.value
    if(result == "mac"){
        bloc.innerHTML = `
        <div class="d-flex">
                        <div class="m-3">
                            <label for="pouces" class="form-label">Nbr de pouces</label>
                            <input required type="number" class="form-control" name="pouces" id="pouces">
                        </div>
                        <div class="m-3">
                            <label for="puce" class="form-label">Puce</label>
                            <input required type="text" class="form-control" name="puce" id="puce">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="m-3">
                            <label for="stockage" class="form-label">Stockage (GB)</label>
                            <input required type="number" class="form-control" name="stockage" id="stockage">
                        </div>
                        <div class="m-3">
                            <label for="memoire" class="form-label">Mémoire RAM</label>
                            <input required type="number" class="form-control" name="memoire" id="memoire">
                        </div>
                    </div>
                    <div class="d-flex justify-content-evenly">
                        <div class="m-3">
                            <label for="touchbar" class="form-label">Touch bar</label>
                            <input type="checkbox" name="touchbar" id="touchbar">
                        </div>
                        <div class="m-3">
                            <label for="touchid" class="form-label">Touch id</label>
                            <input type="checkbox" name="touchid" id="touchid">
                        </div>
                    </div>
                </div>`
    }else if(result == "iphone" || result == "ipad"){
        bloc.innerHTML = `<div class="d-flex">
        <div class="m-3">
            <label for="pouces" class="form-label">Nbr de pouces</label>
            <input required type="number" class="form-control" name="pouces" id="pouces">
        </div>
        <div class="m-3">
            <label for="puce" class="form-label">Puce</label>
            <input required type="text" class="form-control" name="puce" id="puce">
        </div>
    </div>
    <div class="d-flex">
        <div class="m-3">
            <label for="stockage" class="form-label">Stockage (GB)</label>
            <input required type="number" class="form-control" name="stockage" id="stockage">
        </div>
        <div class="m-3">
            <label for="memoire" class="form-label">Mémoire RAM</label>
            <input required type="number" class="form-control" name="memoire" id="memoire">
        </div>
    </div>
    <div class="d-flex justify-content-around">
        <div class="m-3">
            <label for="camera" class="form-label">Camera (px)</label>
            <input required type="number" class="form-control" name="camera" id="camera">
        </div>
        <div class="m-3">
            <label for="faceid" class="form-label">Face ID</label>
            <input type="checkbox" name="faceid" id="faceid">
        </div>
        <div class="m-3">
            <label for="touchid" class="form-label">Touch id</label>
            <input type="checkbox" name="touchid" id="touchid">
        </div>
    </div>
</div>`
    }else if(result == "watch" || result == "airpods"){
        bloc.innerHTML = ``
    }else{
        bloc.innerHTML = `
        <div class="m-3">
                <label for="accessoireCategorie">Accessoire pour</label>
                <select class="form-select" id="accessoireCategorie" name="accessoireCategorie">
                    <option value="mac" selected>Mac</option>
                    <option value="iphone">iPhone</option>
                    <option value="ipad">iPad</option>
                    <option value="watch">Watch</option>
                    <option value="airpods">Air Pods</option>
                </select>
                </div>`
    }
  });