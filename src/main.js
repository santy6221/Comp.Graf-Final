var scene = null,
    camara = null,
    render = null,
    controls = null;
var model = null;
var yes = false;

var mouse,
    raycaster;

var boxes = [];

function start() {
    initElements();
    animate();
}

function initElements() {

    scene = new THREE.Scene();
    scene.background = new THREE.Color(0xe6f7ff);

    camera = new THREE.PerspectiveCamera(
        30, // Ángulo "grabación" - De abaja -> Arriba
        window.innerWidth / window.innerHeight, // Relación de aspecto 16:9
        0.1, // Mas cerca (no renderiza)
        1000, // Mas lejos (no renderiza)

    );

    // renderer = new THREE.WebGLRenderer();
    renderer = new THREE.WebGLRenderer({ canvas: document.getElementById('app') });

    renderer.setSize(window.innerWidth / 2, window.innerHeight);

    //document.body.appendChild(renderer.domElement);

    controls = new THREE.OrbitControls(camera, renderer.domElement);
    camera.position.set(-363.95, 171.75, -5.22);
    controls.target = new THREE.Vector3(0, 85, 0);





    controls.update();


    createLight();
    // loadOBJ_MTL('../models/obj/parque/', 'parque.mtl', 'parque.obj');
    loadGITF_B();
    loadGITF_H();
    loadGITF_CB();

    raycaster = new THREE.Raycaster();
    mouse = new THREE.Vector2();

    /*document.addEventListener('mousedown', onDocumentMouseDown, false);
    document.addEventListener('touchstart', onDocumentMouseStart, false);

    window.addEventListener('mousemove', onMouseMove, false);*/


}

function createLight() {

    // Create a directional light
    light = new THREE.DirectionalLight(0xffffff, 0.8, 1000);
    light2 = new THREE.DirectionalLight(0xffffff, 0.6, 1000);
    //light = new THREE.DirectionalLight(0xffffff, 1, 1000);
    // move the light back and up a bit
    light.position.set(10, 10, 10);
    light2.position.set(-10, 10, -10);
    // remember to add the light to the scene
    scene.add(light);
    scene.add(light2);
}

function animate() {
    requestAnimationFrame(animate);
    // required if controls.enableDamping or controls.autoRotate are set to true
    controls.update();
    renderer.render(scene, camera);

}

var ObjetoUno;
var ObjetoDos;
var ObjetoTres;

function loadOBJ_MTL(generalPath, pathMTL, pathOBJ) {
    var mtlLoader = new THREE.MTLLoader();
    mtlLoader.setTexturePath(generalPath);
    mtlLoader.setPath(generalPath);
    mtlLoader.load(pathMTL, function(materials) {

        materials.preload();

        var objLoader = new THREE.OBJLoader();
        objLoader.setMaterials(materials);
        objLoader.setPath(generalPath);
        objLoader.load(pathOBJ, function(object) {

            modelLoad = object;
            ObjetoUno = object;
            scene.add(object);
            object.scale.set(0.3, 0.3, 0.3);
            object.position.y = 0;
            object.position.x = 0;

            model = object;
        });
    });
}
//objeto Uno
function loadGITF_B() {
    // Instantiate a loader
    var loader = new THREE.GLTFLoader();

    // Optional: Provide a DRACOLoader instance to decode compressed mesh data
    var dracoLoader = new THREE.DRACOLoader();
    dracoLoader.setDecoderPath('../models/botella');
    loader.setDRACOLoader(dracoLoader);

    // Load a glTF resource
    loader.load(
        // resource URL
        '../models/botella/scene.gltf',
        // called when the resource is loaded
        function(gltf) {
            ObjetoUno = gltf.scene;
            scene.add(gltf.scene);
            ObjetoUno.position.set(0, 90, -5.22);
            gltf.scene.visible = false;
            gltf.animations; // Array<THREE.AnimationClip>
            gltf.scene; // THREE.Scene
            gltf.scenes; // Array<THREE.Scene>
            gltf.cameras; // Array<THREE.Camera>
            gltf.asset; // Object
            gltf.scene.scale.set(40, 40, 40) // scale here
            gltf.scene.rotation.y = -(Math.PI / 2);
        },

        // called while loading is progressing
        function(xhr) {
            console.log((xhr.loaded / xhr.total * 100) + '% loaded');
        },
        // called when loading has errors
        function(error) {
            console.log('An error happened');
        }
    );
}
// Objeto dos
function loadGITF_H() {
    // Instantiate a loader
    var loader = new THREE.GLTFLoader();

    // Optional: Provide a DRACOLoader instance to decode compressed mesh data
    var dracoLoader = new THREE.DRACOLoader();
    dracoLoader.setDecoderPath('../models/other');
    loader.setDRACOLoader(dracoLoader);

    // Load a glTF resource
    loader.load(
        // resource URL
        '../models/other/scene.gltf',
        // called when the resource is loaded
        function(gltf) {
            ObjetoDos = gltf.scene;
            scene.add(gltf.scene);
            gltf.scene.visible = false;
            gltf.animations; // Array<THREE.AnimationClip>
            gltf.scene; // THREE.Scene
            gltf.scenes; // Array<THREE.Scene>
            gltf.cameras; // Array<THREE.Camera>
            gltf.asset; // Object
            gltf.scene.scale.set(1, 1, 1) // scale here
            gltf.scene.rotation.y = -(Math.PI / 2);
        },

        // called while loading is progressing
        function(xhr) {
            console.log((xhr.loaded / xhr.total * 100) + '% loaded');
        },
        // called when loading has errors
        function(error) {
            console.log('An error happened');
        }
    );
}
// Objeto tres
function loadGITF_CB() {
    // Instantiate a loader
    var loader = new THREE.GLTFLoader();

    // Optional: Provide a DRACOLoader instance to decode compressed mesh data
    var dracoLoader = new THREE.DRACOLoader();
    dracoLoader.setDecoderPath('../models/kleenex');
    loader.setDRACOLoader(dracoLoader);

    // Load a glTF resource
    loader.load(
        // resource URL
        '../models/kleenex/scene.gltf',
        // called when the resource is loaded
        function(gltf) {
            ObjetoTres = gltf.scene;
            scene.add(gltf.scene);
            ObjetoTres.position.set(50, 80, 100);
            gltf.scene.visible = true;
            gltf.animations; // Array<THREE.AnimationClip>
            gltf.scene; // THREE.Scene
            gltf.scenes; // Array<THREE.Scene>
            gltf.cameras; // Array<THREE.Camera>
            gltf.asset; // Object
            gltf.scene.scale.set(1000, 1000, 1000) // scale here
            gltf.scene.rotation.y = -(Math.PI / 2);
        },

        // called while loading is progressing
        function(xhr) {
            console.log((xhr.loaded / xhr.total * 100) + '% loaded');
        },
        // called when loading has errors
        function(error) {
            console.log('An error happened');
        }
    );
}

function Botella() {
    ObjetoUno.visible = true;
    ObjetoDos.visible = false;
    ObjetoTres.visible = false;
    alert("Mantener tus manos limpias es importante, reduce la probabilidad de contagiar y de ser contagiado, sin embargo úsalo moderadamente.");
}

function Hombre() {
    ObjetoUno.visible = false;
    ObjetoDos.visible = true;
    ObjetoTres.visible = false;
    alert("Son personas que constantemente arriesgan sus vidas para salvar las de otros, dejamos en sus manos nuestro bienestar.");
}

function Cleanex() {
    ObjetoUno.visible = false;
    ObjetoDos.visible = false;
    ObjetoTres.visible = true;
    alert("Poder cargar con toallitas es algo positivo para situaciones donde te quieras limpiar rápidamente y no halla un lugar para lavarse la manos cerca.");

}