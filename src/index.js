import Phaser from 'phaser';
import spriteSheet from './assets/spawn.png'

const config = {
  type: Phaser.AUTO,
  parent: "phaser-example",
  width: 800,
  height: 600,

  physics: {
    default: 'arcade',
    arcade: {
      debug: false
    }
  },
  scene: {
    preload: preload,
    create: create,
    update: update
  }
};

let cursors;
let spawn;

const game = new Phaser.Game(config);

function preload() {
  this.load.spritesheet('spawn', spriteSheet, { frameWidth: 32, frameHeight: 32 })
}

function create() {
  const platform = this.physics.add.staticGroup();
  spawn = this.physics.add.sprite(50, 80, 'spawn')

  spawn.setCollideWorldBounds(true);

  this.anims.create({
    key: 'left',
    frames: this.anims.generateFrameNumbers('spawn', { start: 0, end: 3 }),
    frameRate: 10,
    repeat: -1
  });

  //  Input Events
  cursors = this.input.keyboard.createCursorKeys();

}

function update() {
  if (cursors.left.isDown) {
    spawn.setVelocityX(-160);
    spawn.anims.play('left', true);
  }
}
