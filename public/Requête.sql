-- SELECT * FROM detailsreclamation INNER JOIN reclamation ON reclamation.id = detailsreclamation.fk_Reclamation WHERE detailsreclamation.id = 2
-- SELECT * FROM reclamation INNER JOIN detailsreclamation ON detailsreclamation.fk_Reclamation = reclamation.id WHERE reclamation.id = 1 AND detailsreclamation.id = 1
-- SELECT JSON_EXTRACT(detailsreclamation, '$.detailsReclamation[0]') AS detail
-- FROM detailsreclamation
-- WHERE detailsreclamation.id = 2


-- SELECT * FROM reclamation WHERE id = 1

SELECT
        t.observation,
        t.referenceCourrier AS referenceCourrier,
        t.typeReclamation AS typeReclamation,
        t.raisonSocial AS raisonSocial,
        t.adresse,
        t.fk_AgentCreat AS fk_AgentCreat,
        t.nif,
        t.fk_contribuable AS fkcontribuable,
        
        JSON_ARRAYAGG(
            JSON_OBJECT(
                'montantConteste', dr.montantConteste,
                'motifivationRecours', dr.motifivationRecours,
                'referenceTitrePerception', dr.referenceTitrePerception,
                'montantNonConteste', dr.montantNonConteste,
                'intituleActeGenerateur', dr.intituleActeGenerateur,
                'typedocument', dr.typedocument,
                'fkActeGenerateur', dr.fkActeGenerateur,
                'fk_AgentCreat', dr.fk_AgentCreat,
                'motivationReclamation', dr.motivationReclamation,
                'montantDu', dr.montantDu,
                'devise', dr.devise,
                'avecSurcis', dr.avecSurcis
            )
        ) AS detailsReclamation
    FROM
    reclamation AS t
    JOIN
    detailsreclamation AS dr ON t.id = dr.fk_Reclamation
    WHERE
        t.nif = 'VVDUDIIE'
    GROUP BY
        t.observation,
        t.referenceCourrier,
        t.typeReclamation,
        t.raisonSocial,
        t.adresse,
        t.fk_AgentCreat,
        t.nif,
        t.fk_contribuable
        