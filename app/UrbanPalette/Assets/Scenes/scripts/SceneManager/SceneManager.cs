using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using PLATEAU.CityGML;

public class SceneManager : MonoBehaviour
{

    private GameObject CityObject;


    // Start is called before the first frame update
    void Start()
    {
        CityObject = GameObject.Find("13100_tokyo23-ku_2022_citygml_1_2_op");
        int childCount = CityObject.transform.childCount;
        var BuildingObjects = new Transform[childCount];
        var Colorlist = new string [3]{"red", "blue", "green"};
        for (int i=0; i < childCount; i++){
            BuildingObjects[i] = CityObject.transform.GetChild(i);
            //Debug.Log(BuildingObjects[i].name);
            int grandChildCount = BuildingObjects[i].childCount;
            for (int j=0; j < grandChildCount; j++){
                int grandGrandChildCount = BuildingObjects[i].GetChild(j).childCount;
                for (int k=0; k < grandGrandChildCount; k++){
                    var CurrentObject = BuildingObjects[i].GetChild(j).GetChild(k).gameObject;
                    CurrentObject.tag = Colorlist[k % 3];
                    CurrentObject.AddComponent<Test>();

                }
            }
        }
        
    }

    // Update is called once per frame
    void Update()
    {
        
    }
}
