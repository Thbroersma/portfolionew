export default class Ghost {
    // making the ghost elements 
    constructor(className, startIndex, speed) {
        this.className = className;
        this.startIndex = startIndex;
        this.speed = speed
        this.currentIndex = startIndex;
        this.timerId = NaN;
        this.isScared = false; 
    }
}

