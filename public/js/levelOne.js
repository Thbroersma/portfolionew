import Ghost from "./Ghost.js";
console.log("File loaded");
const grid = document.querySelector('.grid');
const scoreDisplay = document.querySelector('.score');

const width = 22; 
let score = 0;
let coins = 68;
let powerPellets = 2;
let pacmanCurrentIndex = 163;
const endImage = document.querySelector('.the-end');
const reload = document.querySelector('.reload');

// The layout of the playing field
const layout = [
  17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17,
  17, 6, 3, 3, 3, 3, 3, 3, 3, 3, 13, 13, 3, 3, 3, 3, 3, 3, 3, 3, 9, 17,
  17, 2, 3, 16, 1, 3, 1, 0, 10, 0, 0, 0, 0, 10, 1, 0, 3, 2, 0, 3, 1, 17,
  17, 15, 0, 1, 3, 1, 3, 0, 10, 0, 0, 0, 0, 10, 0, 1, 0, 3, 2, 0, 18, 17,
  17, 2, 1, 3, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 2, 1, 0, 1, 17,
  17, 12, 1, 0, 3, 1, 0, 10, 0, 5, 5, 5, 5, 0, 10, 0, 0, 2, 0, 0, 11, 17,
  17, 2, 1, 0, 1, 0, 0, 10, 0, 5, 5, 5, 5, 0, 10, 0, 0, 2, 3, 2, 1, 17,
  17, 2, 0, 1, 0, 3, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 2, 0, 1, 17,
  17, 2, 10, 0, 1, 0, 0, 0, 1, 3, 0, 3, 0, 3, 2, 1, 0, 0, 0, 10, 1, 17,
  17, 2, 10, 10, 0, 3, 2, 1, 3, 0, 3, 2, 0, 0, 3, 2, 3, 16, 10, 10, 1, 17,
  17, 8, 4, 4, 4, 4, 4, 4, 4, 4, 14, 14, 4, 4, 4, 4, 4, 4, 4, 4, 7, 17,
  17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17
];
const squares = [];

function createBoard() {
  
  for (let i = 0; i < layout.length; i++) {
    const square = document.createElement('div');
    // Here is the grid filed with div how get after there own styling
    grid.appendChild(square);
    squares.push(square);
    if (layout[i] === 0) {
      squares[i].classList.add('field', 'pac-dot');
    } else if (layout[i] === 1) {
      squares[i].classList.add('border-right');
    } else if (layout[i] === 2) {
      squares[i].classList.add('border-left');
    } else if (layout[i] === 3) {
      squares[i].classList.add('border-top');
    } else if (layout[i] === 4) {
      squares[i].classList.add('border-bottom');
    } else if (layout[i] === 5) {
      squares[i].classList.add('ghost-lair');
    } else if (layout[i] === 6) {
      squares[i].classList.add('border-topLeft');
    } else if (layout[i] === 7) {
      squares[i].classList.add('border-bottomRight');
    } else if (layout[i] === 8) {
      squares[i].classList.add('border-bottomLeft');
    } else if (layout[i] === 9) {
      squares[i].classList.add('border-topRight');
    } else if (layout[i] === 10) {
      squares[i].classList.add('field-box');
    } else if (layout[i] === 11) {
      squares[i].classList.add('field-exit-right');
    } else if (layout[i] === 12) {
      squares[i].classList.add('field-exit-left');
    } else if (layout[i] === 13) {
      squares[i].classList.add('field-box-top');
    } else if (layout[i] === 14) {
      squares[i].classList.add('field-box-bottom');
    } else if (layout[i] === 15) {
      squares[i].classList.add('field-box-left');
    } else if (layout[i] === 16) {
      squares[i].classList.add('field', 'power-pellet');
    } else if (layout[i] === 17) {
      squares[i].classList.add('clear');
    } else if (layout[i] === 18) {
      squares[i].classList.add('field-box-right');
    }
  }
}

createBoard();
squares[pacmanCurrentIndex].classList.add('pac-man');
//movement of pacman
function movePacman(e) {

  squares[pacmanCurrentIndex].classList.remove('pac-man');
  switch (e.keyCode) {
    case 37:
      // The move for a div backwards
      if (pacmanCurrentIndex % width !== 0 && !squares[pacmanCurrentIndex - 1].classList.contains('field-box')
        && !squares[pacmanCurrentIndex - 1].classList.contains('ghost-lair') && !squares[pacmanCurrentIndex - 1].classList.contains('border-right')
        && !squares[pacmanCurrentIndex].classList.contains('border-left') && !squares[pacmanCurrentIndex - 1].classList.contains('field-box-left')
        && !squares[pacmanCurrentIndex - 1].classList.contains('field-box-top') && !squares[pacmanCurrentIndex - 1].classList.contains('field-box-bottom')
        && !squares[pacmanCurrentIndex - 1].classList.contains('clear'))
        pacmanCurrentIndex -= 1;

      if ((pacmanCurrentIndex) === 111) {
        pacmanCurrentIndex = 130;
      }

      break;
    case 38:
      // The move for a div upwards   
      if (pacmanCurrentIndex - width >= 0 && !squares[pacmanCurrentIndex - 22].classList.contains('field-box')
        && !squares[pacmanCurrentIndex - 22].classList.contains('ghost-lair') && !squares[pacmanCurrentIndex].classList.contains('border-top')
        && !squares[pacmanCurrentIndex - 22].classList.contains('field-box-left') && !squares[pacmanCurrentIndex - 22].classList.contains('field-box-top')
        && !squares[pacmanCurrentIndex - 22].classList.contains('clear') && !squares[pacmanCurrentIndex - 22].classList.contains('field-box-right'))
        pacmanCurrentIndex -= 22;

      break;
    case 39:
      // The move for a div forward 
      if (pacmanCurrentIndex % width < width - 1 && !squares[pacmanCurrentIndex + 1].classList.contains('field-box')
        && !squares[pacmanCurrentIndex + 1].classList.contains('ghost-lair') && !squares[pacmanCurrentIndex + 1].classList.contains('border-left')
        && !squares[pacmanCurrentIndex].classList.contains('border-right') && !squares[pacmanCurrentIndex + 1].classList.contains('field-box-top')
        && !squares[pacmanCurrentIndex + 1].classList.contains('field-box-bottom') && !squares[pacmanCurrentIndex + 1].classList.contains('field-box-left')
        && !squares[pacmanCurrentIndex + 1].classList.contains('clear') && !squares[pacmanCurrentIndex + 1].classList.contains('field-box-right'))
        pacmanCurrentIndex += 1;

      if ((pacmanCurrentIndex) === 130) {
        pacmanCurrentIndex = 111;
      }

      break;
    case 40:
      // The move for a div down 
      if (pacmanCurrentIndex + width < width * width && !squares[pacmanCurrentIndex + 22].classList.contains('field-box')
        && !squares[pacmanCurrentIndex + 22].classList.contains('ghost-lair') && !squares[pacmanCurrentIndex].classList.contains('border-bottom')
        && !squares[pacmanCurrentIndex + 22].classList.contains('border-top') && !squares[pacmanCurrentIndex + 22].classList.contains('field-box-left')
        && !squares[pacmanCurrentIndex + 22].classList.contains('field-box-bottom') && !squares[pacmanCurrentIndex + 22].classList.contains('clear')
        && !squares[pacmanCurrentIndex + 22].classList.contains('field-box-right'))
        pacmanCurrentIndex += 22;

      break;
  }
  squares[pacmanCurrentIndex].classList.add('pac-man');
  // the function of the game
  pacDotEaten();
  powerPelletEaten();
  checkForGameOver();
  chechForWin();
}
document.addEventListener('keyup', movePacman);

// How the pac-dots are eaten and how that works with the score
function pacDotEaten() {
  
  if (squares[pacmanCurrentIndex].classList.contains('pac-dot')) {
    let i = 0;
    i++;
    coins--;
    scoreDisplay.innerHTML = score;
    squares[pacmanCurrentIndex].classList.remove('pac-dot');
    score = score + (i * 10);
  }

}
// What happens when you eat a power-pellet
function powerPelletEaten() {

  if (squares[pacmanCurrentIndex].classList.contains('power-pellet')) {
    score = score + 40;
    powerPellets--;
    scoreDisplay.innerHTML = score;
    ghosts.forEach(ghost => ghost.isScared = true)

    setTimeout(unScaredGhosts, 10000);
    squares[pacmanCurrentIndex].classList.remove('power-pellet');
  }

}

function unScaredGhosts() {

  ghosts.forEach(ghost => ghost.isScared = false)
}

// The startposition of the ghost and the speed
let ghosts = [
  new Ghost('blinky', 96, 300),
  new Ghost('pinky', 99, 300),
  new Ghost('crispy', 101, 300),
  new Ghost('winky', 94, 300),
]

ghosts.forEach(ghost => {
  squares[ghost.currentIndex].classList.add(ghost.className);
  squares[ghost.currentIndex].classList.add('ghost');
})

// moving the ghost randomly
ghosts.forEach(ghost => moveGhost(ghost))
function moveGhost(ghost) {
  const directions = [-1, +1, +22, -22];
  let direction = directions[Math.floor(Math.random() * directions.length)];
  ghost.timerId = setInterval(function () {
    //if the next squre your ghost is going to go to does not have a ghost and does not have a wall
    if (direction == +1 &&
      !squares[ghost.currentIndex + 1].classList.contains('clear') &&
      !squares[ghost.currentIndex + 1].classList.contains('field-box-top') &&
      !squares[ghost.currentIndex + 1].classList.contains('field-box-left') &&
      !squares[ghost.currentIndex + 1].classList.contains('field-box-bottom') &&
      !squares[ghost.currentIndex + 1].classList.contains('field-box') &&
      !squares[ghost.currentIndex + 1].classList.contains('ghost-lair') &&
      !squares[ghost.currentIndex + 1].classList.contains('border-left') &&
      !squares[ghost.currentIndex].classList.contains('border-right') &&
      !squares[ghost.currentIndex].classList.contains('border-top')) {
      //remove the ghosts classes
      squares[ghost.currentIndex].classList.remove(ghost.className)
      squares[ghost.currentIndex].classList.remove('ghost', 'scared-ghost')
      //move into that space
      ghost.currentIndex += 1
      squares[ghost.currentIndex].classList.add(ghost.className, 'ghost')
      //else find a new random direction ot go in
    } else if (direction == +22 &&
      !squares[ghost.currentIndex + 22].classList.contains('clear') &&
      !squares[ghost.currentIndex + 22].classList.contains('field-box-bottom') &&
      !squares[ghost.currentIndex + 22].classList.contains('field-box-left') &&
      !squares[ghost.currentIndex + 22].classList.contains('field-box-right') &&
      !squares[ghost.currentIndex + 22].classList.contains('field-box') &&
      !squares[ghost.currentIndex + 22].classList.contains('ghost-lair') &&
      !squares[ghost.currentIndex + 22].classList.contains('border-top') &&
      !squares[ghost.currentIndex].classList.contains('border-bottom')) {
      squares[ghost.currentIndex].classList.remove(ghost.className)
      squares[ghost.currentIndex].classList.remove('ghost', 'scared-ghost')
      ghost.currentIndex += 22
      squares[ghost.currentIndex].classList.add(ghost.className, 'ghost')
    } else if (direction == -1 &&
      !squares[ghost.currentIndex - 1].classList.contains('clear') &&
      !squares[ghost.currentIndex - 1].classList.contains('field-box-top') &&
      !squares[ghost.currentIndex - 1].classList.contains('field-box-left') &&
      !squares[ghost.currentIndex - 1].classList.contains('field-box-bottom') &&
      !squares[ghost.currentIndex - 1].classList.contains('field-box') &&
      !squares[ghost.currentIndex - 1].classList.contains('ghost-lair') &&
      !squares[ghost.currentIndex - 1].classList.contains('border-right') &&
      !squares[ghost.currentIndex].classList.contains('border-left')) {
      squares[ghost.currentIndex].classList.remove(ghost.className)
      squares[ghost.currentIndex].classList.remove('ghost', 'scared-ghost')
      ghost.currentIndex -= 1
      squares[ghost.currentIndex].classList.add(ghost.className, 'ghost')
    } else if (direction == -22 &&
      !squares[ghost.currentIndex - 22].classList.contains('clear') &&
      !squares[ghost.currentIndex - 22].classList.contains('field-box-top') &&
      !squares[ghost.currentIndex - 22].classList.contains('field-box-left') &&
      !squares[ghost.currentIndex - 22].classList.contains('field-box-right') &&
      !squares[ghost.currentIndex - 22].classList.contains('field-box') &&
      !squares[ghost.currentIndex - 22].classList.contains('ghost-lair') &&
      !squares[ghost.currentIndex - 22].classList.contains('border-bottom') &&
      !squares[ghost.currentIndex].classList.contains('border-top')) {
      squares[ghost.currentIndex].classList.remove(ghost.className)
      squares[ghost.currentIndex].classList.remove('ghost', 'scared-ghost')
      ghost.currentIndex -= 22
      squares[ghost.currentIndex].classList.add(ghost.className, 'ghost')
    } else direction = directions[Math.floor(Math.random() * directions.length)]
    if (ghost.isScared) {
      squares[ghost.currentIndex].classList.add('scared-ghost');
    }

    if (ghost.isScared && squares[ghost.currentIndex].classList.contains('pac-man')) {
      squares[ghost.currentIndex].classList.remove(ghost.className, 'ghost', 'scared-ghost');
      score += 100;
      ghost.currentIndex = ghost.startIndex;
      squares[ghost.currentIndex].classList.add(ghost.className, 'ghost')
    }

    if (squares[ghost.currentIndex].classList.contains('pac-man')) {
      ghosts.forEach(ghost => clearInterval(ghost.timerId))
      document.removeEventListener('keyup', movePacman)
      setTimeout(function () {
        endImage.classList.remove('hidden');

      }, 200)
    }
  }, 300)
  
}

// Game over function when it is and when it is not
function checkForGameOver() {

  if ((squares[pacmanCurrentIndex].classList.contains('ghost')) &&
    !squares[pacmanCurrentIndex].classList.contains('scared-ghost')
  ) {
    ghosts.forEach(ghost => clearInterval(ghost.timerId))
    document.removeEventListener('keyup', movePacman)
    setTimeout(function () {
      endImage.classList.remove('hidden');

    }, 200)
  }

}

// When you have won the game
function chechForWin() {

  if (coins == 0 && powerPellets == 0) {
    alert('You won! You go to level 2');
    setTimeout(function () {
      location.replace("level2.html");
    }, 200)
  }

}

if (reload) {
  reload.addEventListener('click', function () {

    location.replace("players1.html");
  })
}