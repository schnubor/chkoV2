//Add Renderer
renderer = new THREE.WebGLRenderer( { alpha: true } );
var container = document.getElementById('canvas');
var w = container.offsetWidth;

var h = container.offsetHeight;
renderer.setSize(w, h);
container.appendChild(renderer.domElement);

//Add Camera
camera = new THREE.PerspectiveCamera( 75, w / h, .1, 1000 );
camera.position.z = 5;

//Create Scene with geometry, material-> mesh
scene = new THREE.Scene();
geometry = new THREE.BoxGeometry( 3,3,3 );
material = new THREE.MeshBasicMaterial( { color: 0xe6cc44, wireframe: true, wireframeLinewidth: 1 } );
cube = new THREE.Mesh( geometry, material );
scene.add( cube );

function animate() {
    requestAnimationFrame( animate );
    
    cube.rotation.x += 0.01;
    cube.rotation.y += 0.01;

	renderer.render( scene, camera );
}

animate();
