var ctx;
PImage img;

int pxSize = 1;
int numRows, numCols;

int[][] unicodeByBrightness = {	{1,0,23},
								{27,16,18},
								{24,29,34,35},
								{28,37,17},
								{30,38,3,13},
								{20,26,39,67},
								{4,5,6,8,11,12,15,21,31},
								{2,7,10,14,19,36,25,55,58,60},
								{32,56,59,61,64,9,22,48,49,50,51,52,54,57,65},
								{33,53,66,47,63,45},
								{46,40,62},
								{44,41,42,43} };
								
int[][] prevValue = new int[4*64*48][2];
 
void setup(){
    size(128,96);
    numCols = width/pxSize;
    numRows = height/pxSize;
    
    for (int i=0; i<numCols*numRows; i++) {
	  for (int j=0; j<2; j++) {
	    prevValue[i][j] = 0;
	  }
	}
    
    ctx = externals.context;
    init();
}
 
void draw(){
    pushMatrix();
    translate(width,0);
    scale(-1,1);//mirror the video
    ctx.drawImage(video, 0, 0, width, height); //video is defined outside processing code
    popMatrix();
 
    //
    String result = "";

	// draw the scale first
	for(int i=0; i<unicodeByBrightness.length; i++){
		for(int j=0; j<unicodeByBrightness[i].length; j++){
			int uni = 880 + unicodeByBrightness[i][j];
	        result += "&#58"+uni+";";	// actual unicode character
	    }
	}
	result += "\u000d";


    // get frame, downsize to needed size, look at each pixel
    img=get();
    //img.resize(numCols,numRows);

    for(int j=0; j<numRows; j++)
    {
        for(int i=0; i<numCols; i++)
        {
            // determine brightness of pixel
            int bright = brightness(img.get(i, j));
            
            // map each value to a character in the font
            int map_bright = (int)map(sqrt(bright),0,16,0,unicodeByBrightness.length);
            
            int variation;
            int value;
            
            if( abs(map_bright - prevValue[j*numCols+i][0]) < 2 )
            {
            	value = prevValue[j*numCols+i][0];
	        	variation = prevValue[j*numCols+i][1];
            }
            else
            {
            	value = map_bright;
            	variation = (int)random(unicodeByBrightness[value].length);
            }
            	
            prevValue[j*numCols+i][0] = value;
            prevValue[j*numCols+i][1] = variation; 
            
            int uni = 880 + unicodeByBrightness[value][variation];
            
            // add unicode character to the string in html
            result += "&#58"+uni+";";
        }
        result += "\u000d"; //"<br>";
    }   

    printMessage(result);
}
